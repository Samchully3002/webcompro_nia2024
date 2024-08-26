<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        //get all videos from Models
        if ($request->ajax()) {

            $data = Notice::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="/dashboard/update-notices/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm " onclick="deleteNotice('.$row->id.')">Delete</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }


        //return view with data
        return  view('backend/pages/list-notice');
    }

    /**
     * store community notice
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
                'content'   => 'required',
            ]);

            $notice = Notice::create([
                'title' => $request->title,
                'content' => $request->content,
                'date'      => $request->date,
                'display'  => 1
            ]);

            $notice->save();

            //return response
            return response()->json([
                'success' => true,
                'message' => 'Success saving notices data!',
                'data'    => $notice  
            ]);

        }
        //return view with data
        return  view('backend/pages/post-notices');
     }
     
         /**
     * store community notice
     *
     * @param  mixed $request 
     * @return void
     */

     public function update($id){

        $notice = Notice::findOrFail($id);

        //return view with data
        return  view('backend/pages/update-notice', compact('notice'));
     }




     public function store_ajax(Request $request)
     {
        // check if ajax request
        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'title'         => 'required',
                'content'       => 'required',
                'date'          => 'required',
                'image'         => 'image|mimes:jpeg,png,jpg,gif|max:5120'
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            if($request->id){

                $note = Notice::findOrFail($request->id);

                if ($request->hasFile('image')) {

                    //upload new image
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/notice/'), $imageName);
        
                    //delete old image
                    Storage::delete('backend/images/notice/'.$note->image);
        
                    //update product with new image
                    $note->update([
                        'title'      => $request->title,
                        'content'    => $request->content,
                        'title_kr'      => $request->title_kr,
                        'content_kr'    => $request->content_kr,
                        'title_id'      => $request->title_id,
                        'content_id'    => $request->content_id,
                        'date'       => $request->date,
                        'image'      => $imageName,
                        'display'    => 1
                    ]);
        
                    } else {

                        //update product without image
                        $note->update([
                            'title'      => $request->title,
                            'content'    => $request->content,
                            'title_kr'      => $request->title_kr,
                            'content_kr'    => $request->content_kr,
                            'title_id'      => $request->title_id,
                            'content_id'    => $request->content_id,
                            'date'       => $request->date,
                            'display'    => 1
                        ]);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Success saving notice data',
                    'data'    => $note  
                ]);

                }else{
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/notice/'), $imageName);
    
                   //insert our team member
                   $note = Notice::create([
                        'title'      => $request->title,
                        'content'    => $request->content,
                        'title_kr'      => $request->title_kr,
                        'content_kr'    => $request->content_kr,
                        'title_id'      => $request->title_id,
                        'content_id'    => $request->content_id,
                        'date'       => $request->date,
                        'image'      => $imageName,
                        'display'    => 1
                    ]);
    
                    $note->save();
    
                    //return response
                    return response()->json([
                        'success' => true,
                        'message' => 'Success saving notice data',
                        'data'    => $note  
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
        $notice = Notice::findOrFail($request->id);

        //delete image
        Storage::delete('backend/images/notice/'. $notice->image);

        //delete product
        $notice->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Success deleting notice data',
            'data'    => $notice  
        ]);
        }

    }

}
