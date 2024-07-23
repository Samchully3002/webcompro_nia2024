<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\Models\User;



class AdminController extends Controller
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

            $data = User::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<button onclick="showAdminById('.$row->id.')" class="edit btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">View</button> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm " onclick="deleteAdmin('.$row->id.')">Delete</a> ';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }


        //return view with data
        return  view('backend/pages/list-admins');
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


            if($request->id){

            //define validation rules
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255']
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }


                $user = User::findOrFail($request->id);

                $password = $request->password ? Hash::make($request->password) : $user->password;

                //update tags data
                        $user->update([
                            'name' => $request->name,
                            'email' => $request->email,
                            'password' => Hash::make($request->password)
                        ]);
                

                return response()->json([
                    'success' => true,
                    'message' => 'success updating admin data',
                    'data'    => $user  
                ]);

                }else{

            //define validation rules
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }


                   //insert admin data
                   $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    ]);
    
                    $user->save();
    
                    //return response
                    return response()->json([
                        'success' => true,
                        'message' => 'success saving admin data',
                        'data'    => $user  
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
       
        $user = User::findOrFail($request->id);

        //render view with product
        return response()->json(['admin' => $user]);
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
 
        $user = User::findOrFail($request->id);

        //delete product
        $user->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'success deleting admin data',
            'data'    => $user  
        ]);
        }

    }



}
