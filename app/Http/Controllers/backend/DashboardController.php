<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MediaReport;
use App\Models\ContactUs;
use App\Models\Notice;
use App\Models\OurTeam;
use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */

     public function index(Request $request)
     {
        
        //Our Team
        $employee  = OurTeam::get(); $countEmp = $employee->count();

        //News
        $news      = MediaReport::get(); $countNews = $news->count();

        //Notice
        $notice    = Notice::get(); $countNotice = $notice->count();

        //Message
        $message   = ContactUs::get()->where('read',0); $countMess = $message->count();

        return  view('backend/pages/dashboard', compact('countEmp','countNews','countNotice','countMess'));
        
     }

    /**
     * display_message [ajax]
     *
     * @return void
     */
    public function display_message(Request $request)
    {
        //get all media news
        if ($request->ajax()) {

            $data = ContactUs::query()->latest();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           if($row->read==1){
                              $btn = '<button onclick="showMessage('.$row->id.')" class="edit btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">View</button>';
                           }else{
                              $btn = '<button onclick="showMessage('.$row->id.')" class="edit btn btn-success btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Read</a>';
                           }
                           
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        //return view with data
        return  view('backend/pages/list-message');
    }

    /**
     * message_by_id [ajax,id]
     *
     * @return void
     */

     public function message_by_id(Request $request){
        $message = ContactUs::findOrFail($request->id);

        if($message->read == 0){
            $message->update([
                'read'      =>1
            ]);
        }

        //render view with product
        return response()->json(['message' => $message]);
     }
}
