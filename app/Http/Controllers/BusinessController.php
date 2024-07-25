<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\MetaTags;


class BusinessController extends Controller
{

    /**
     * Display business logistic.
     */
    public function businesslog(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();

        return view('frontend/pages/business/business_logistics',compact(['meta']));
    }

    /**
     * Display business logistic.
     */
    public function healthcare(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();

        return view('frontend/pages/business/digital_healthcare', compact(['meta']));
    }

    /**
     * Display business manegement.
     */
    public function management(Request $request): View
    {

        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();
        return view('frontend/pages/business/management', compact(['meta']));
    }


    /**
     * Display business manegement.
     */
    public function exportvoucher(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();

        return view('frontend/pages/business/exportvoucher',compact(['meta']));
    }

    public function webdesign(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();

        return view('frontend/pages/business/web_design', compact(['meta']));
    }

    public function webflip(Request $request): View
    {
        $curentURL = $request->path();
        $meta = MetaTags::where('url', 'LIKE', '%'.$curentURL.'%')->first();

        return view('frontend/pages/business/web_design_flip', compact(['meta']));
    }

}
