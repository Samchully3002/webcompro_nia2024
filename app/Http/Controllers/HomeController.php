<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

use App\Models\MediaReport;
use App\Models\OurTeam;
use App\Models\Notice;
use App\Models\ContactUs;
use App\Models\Monitoring;
use App\Models\MetaTags;

use App\Rules\RecaptchaV3Rule;

class HomeController extends Controller
{
    /**
     * Display home pages.
     */
    public function index(Request $request): View
    {
        //get posts
        $curentURL = $request->path();
        $curentURL ? $curentURL :'/';
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        $posts = MediaReport::latest()->take(4)->get();

        return view('frontend/pages/home', compact('posts','meta'));
    }

    /**
     * Display about us pages.
     */
    public function about(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        $users = OurTeam::query()
                    ->orderBy('sequence', 'asc')
                    ->where('landing',1)
                    ->get();

        $roles = ['Accounting/HR', 'Business Support', 'Marketing (Public Relations)', 'IT Developer', 'IT Support', 'Marketing (Editor)','UI/UX Designer', 'Driver', 'Business Support (Translator)' ];

        foreach($users as $list){
            $list->role = $roles[$list->role-1];
        }

        $list = [];

        foreach($users as $item){
            array_push($list, $item);
        }
        $list = array_chunk($list,3);

        return view('frontend/pages/about')->with([
            'list' => $list,
            'meta' => $meta
        ]);
    }

    /**
     * Display about news.
     */
    public function news(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        $posts = MediaReport::latest()->paginate(12);

        return view('frontend/pages/news', compact('posts','meta'));
    }

    /**
     * Display about news.
     */
    public function contactus(Request $request): View
    {

        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        return view('frontend/pages/contactus',compact(['meta']));
    }

    /**
     * Submit Contact Us Message
     */
    public function contactsubmit(Request $request)
    {

        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'sender'     => 'required',
                'email'     => 'required',
                'message'    => 'required',
                // Add custom validation rule for reCAPTCHA
                'gresponse' => 'required|recaptchav3'
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }


            //inser media news data
            $mess = ContactUs::create([
                'sender'     => $request->sender,
                'email'     => $request->email,
                'message'    => $request->message,
                'read'      => 0
            ]);

            //return response
            return response()->json([
                'success' => true,
                'message' => 'Success sending message!',
                'data'    => $mess
            ]);

        }

    }

    /**
     * Display about notice.
     */
    public function notice(Request $request): View
    {
        $notice = Notice::latest()->paginate(5);

        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        return view('frontend/pages/notice', compact('notice','meta'));
    }

    public function noticedetail($id, Request $request)
    {
        $notice = Notice::find($id);

        

        $locale = $request->session()->get('locale');
        
        if($locale==null){
            $locale='en';
        }

        switch ($locale) {
            case 'id':
                $notice->title = $notice->title_id ? $notice->title_id : $notice->title;
                $notice->content = $notice->content_id ? $notice->content_id : $notice->content;
              break;
            case 'en':
                $notice->title = $notice->title;
                $notice->content = $notice->content;
              break;
            case 'kr':
                $notice->title = $notice->title_kr ? $notice->title_kr : $notice->title;
                $notice->content = $notice->content_kr ? $notice->content_kr : $notice->content;
              break;
            default:
              $notice->title = $notice->title;
              $notice->content = $notice->content;
          }

        $prev = Notice::where('id', '<', $id)->orderBy('id','desc')->first();

        $next = Notice::where('id', '>', $id)->first();
        $meta = MetaTags::where('url', 'LIKE', '%'.'notice'.'%')->first();
        


        return view('frontend/pages/notice_detail', compact('notice','prev','next','meta'));
    }

    public function privacy()
    {

        $meta = MetaTags::where('url', 'LIKE', '%'.'about-us'.'%')->first();
        return  view('frontend/pages/privacy-policy', compact(['meta']));
    }

    /**
     * Submit Contact Us Message
     */
    public function postmonitor(Request $request)
    {

        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'visited'     => 'required',
                'ip'     => 'required'
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }


            //inser media news data
            $mon = Monitoring::create([
                'visited'     => $request->visited,
                'ip'     => $request->ip
            ]);

            //return response
            return response()->json([
                'success' => true,
                'message' => 'recording success!'
            ]);

        }

    }


}
