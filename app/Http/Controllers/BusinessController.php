<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class BusinessController extends Controller
{

    /**
     * Display business logistic.
     */
    public function businesslog(Request $request): View
    {


        return view('frontend/pages/business/business_logistics');
    }

    /**
     * Display business logistic.
     */
    public function healthcare(Request $request): View
    {


        return view('frontend/pages/business/digital_healthcare');
    }

    /**
     * Display business manegement.
     */
    public function management(Request $request): View
    {


        return view('frontend/pages/business/management');
    }


    /**
     * Display business manegement.
     */
    public function exportvoucher(Request $request): View
    {


        return view('frontend/pages/business/exportvoucher');
    }

}
