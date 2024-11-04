<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


use App\Models\OurTeam;

class OurTeamController extends Controller
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

            $data = OurTeam::query()->orderBy('sequence', 'asc');

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" onclick="showTeam('.$row->id.')" class="edit btn btn-primary btn-sm">View</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm " onclick="deleteTeam('.$row->id.')">Delete</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }


        //return view with data
        return  view('backend/pages/list-team');
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
                'fullname'      => 'required',
                'role'          => 'required',
                'quotes'        => 'required',
                'sequence'      => 'required',
                'landing'       => 'required',
                'image'         => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            if($request->id){

                $user = OurTeam::findOrFail($request->id);

                if ($request->hasFile('image')) {

                    //upload new image
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/employee/'), $imageName);
        
                    //delete old image
                    Storage::delete('backend/images/employee/'.$user->image);
        
                    //update product with new image
                    $user->update([
                        'fullname'      => $request->fullname,
                        'role'          => $request->role,
                        'quotes'        => $request->quotes,
                        'sequence'      => $request->sequence,
                        'landing'       => $request->landing,
                        'image'         => $imageName
                    ]);
        
                    } else {
        
                        //update product without image
                        $user->update([
                            'fullname'      => $request->fullname,
                            'role'          => $request->role,
                            'quotes'        => $request->quotes,
                            'sequence'      => $request->sequence,
                            'landing'       => $request->landing,
                        ]);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Success saving team member',
                    'data'    => $user  
                ]);

                }else{
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('backend/images/employee/'), $imageName);
    
                   //insert our team member
                   $team = OurTeam::create([
                        'fullname'     => $request->fullname,
                        'role'   => $request->role,
                        'quotes'   => $request->quotes,
                        'sequence'   => $request->sequence,
                        'landing'   => $request->landing,
                        'image' => $imageName
                    ]);
    
                    $team->save();
    
                    //return response
                    return response()->json([
                        'success' => true,
                        'message' => 'Success saving team member',
                        'data'    => $team  
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
       
        $team = OurTeam::findOrFail($request->id);

        //render view with product
        return response()->json(['employee' => $team]);
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
        $team = OurTeam::findOrFail($request->id);

        //delete image
        Storage::delete('backend/images/employee/'. $team->image);

        //delete product
        $team->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Success deleting team member',
            'data'    => $team  
        ]);
        }

    }



}
