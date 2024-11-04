<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaReport;

use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Storage;

class MediaNewsController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        //get all media news
        if ($request->ajax()) {

            $data = MediaReport::query()->orderBy('id', 'desc');;

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="update-news/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a><br/><a href="javascript:void(0)" class="delete btn btn-danger btn-sm " onclick="deleteNews('.$row->id.')">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        //return view with data
        return  view('backend/pages/list-news');
    }

    /**
     * store media video
     *
     * @param  mixed $request
     * @return void
     */

     public function store(Request $request){
        // check if ajax request
        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'title'     => 'required',
                'image'     => 'required',
                'source'    => 'required'
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            //upload images
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/images/news/'), $imageName);

            //inser media news data
            $news = MediaReport::create([
                'title'     => $request->title,
                'image'     => $imageName,
                'source'    => $request->source
            ]);

            //return response
            return response()->json([
                'success' => true,
                'message' => 'Success saving media news data!',
                'data'    => $news
            ]);

        }
     }

    /**
     * store community notice
     *
     * @param  mixed $request
     * @return void
     */

     public function update($id){

        $news = MediaReport::findOrFail($id);

        //return view with data
        return  view('backend/pages/update-news', compact('news'));
     }

         /**
     * store our team
     *
     * @param  mixed $request
     * @return void
     */

     public function store_ajax(Request $request)
     {
        // check if ajax request
        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'title'      => 'required',
                'title_id'      => 'required',
                'title_kr'      => 'required',
                'source'        => 'required',
                'image'         => 'image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            if($request->id){

                $user = MediaReport::findOrFail($request->id);

                if ($request->hasFile('image')) {

                    //upload new image
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/news/'), $imageName);

                    //delete old image
                    Storage::delete('backend/images/news/'.$user->image);

                    //update product with new image
                    $user->update([
                        'title'           => $request->title,
                        'title_kr'           => $request->title_kr,
                        'title_id'           => $request->title_id,
                        'news_lang'           => $request->news_lang,
                        'source'          => $request->source,
                        'image'           => $imageName
                    ]);

                    } else {

                        //update product without image
                        $user->update([
                            'title'      => $request->title,
                            'title_kr'           => $request->title_kr,
                            'title_id'           => $request->title_id,
                            'news_lang'           => $request->news_lang,
                            'source'          => $request->source,
                        ]);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Success saving data',
                    'data'    => $user
                ]);

                }else{
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/news/'), $imageName);

                   //insert our team member
                   $team = MediaReport::create([
                        'title'      => $request->title,
                        'title_kr'           => $request->title_kr,
                        'title_id'           => $request->title_id,
                        'news_lang'           => $request->news_lang,
                        'source'          => $request->source,
                        'image' => $imageName
                    ]);

                    $team->save();

                    //return response
                    return response()->json([
                        'success' => true,
                        'message' => 'Success saving data',
                        'data'    => $team
                    ]);
            }

        }
     }

         /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                    //get product by ID
        $team = MediaReport::findOrFail($request->id);

        //delete image
        Storage::delete('backend/images/news/'. $team->image);

        //delete product
        $team->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Success deleting news data',
            'data'    => $team
        ]);
        }

    }

}
