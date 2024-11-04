<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


use App\Models\MetaTags;

class MetaController extends Controller
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

            $data = MetaTags::query()->orderBy('id', 'asc');

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<button onclick="showTagById('.$row->id.')" class="edit btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">View</button> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm " onclick="deleteTag('.$row->id.')">Delete</a> ';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }


        //return view with data
        return  view('backend/pages/list-metatags');
    }

    /**
     * store our team
     *
     * @param  mixed $request 
     * @return void
     */

     public function store(Request $request)
     {
        // check if ajax request
        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'pages'         => 'required',
                'url'           => 'required',
                'title'         => 'required',
                'desc'          => 'required',
                'keyword'       => 'required'
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            if($request->id){

                $tag = MetaTags::findOrFail($request->id);

                //update tags data
                        $tag->update([
                            'pages'         => $request->pages,
                            'url'           => $request->url,
                            'title'         => $request->title,
                            'desc'          => $request->desc,
                            'keyword'       => $request->keyword
                        ]);
                

                return response()->json([
                    'success' => true,
                    'message' => 'Success updating tags data',
                    'data'    => $tag  
                ]);

                }else{

                   //insert tags data
                   $tag = MetaTags::create([
                        'pages'         => $request->pages,
                        'url'           => $request->url,
                        'title'         => $request->title,
                        'desc'          => $request->desc,
                        'keyword'       => $request->keyword
                    ]);
    
                    $tag->save();
    
                    //return response
                    return response()->json([
                        'success' => true,
                        'message' => 'Success saving tags data',
                        'data'    => $tag  
                    ]);
            }

        }
     }

    /**
     * show our team
     *
     * @param  mixed $request 
     * @return void
    */
    public function show(Request $request)
    {
        //get product by ID
       
        $tag = MetaTags::findOrFail($request->id);

        //render view with product
        return response()->json(['tags' => $tag]);
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
 
        $tag = MetaTags::findOrFail($request->id);

        //delete product
        $tag->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Success deleting tag data',
            'data'    => $tag  
        ]);
        }

    }



}
