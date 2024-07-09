<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function change(Request $request)

    {
        $lang = $request->input('lang');
        if (!in_array($lang, ['id', 'en', 'kr'])) {
            abort(400);
        }

        Session::put('locale', $lang);
        return redirect()->back();
    }

    public function ganti($id)

    {
        // $lang = $request->input('lang');
        if (!in_array($id, ['id', 'en', 'kr'])) {
            abort(400);
        }

        Session::put('locale', $id);
        return redirect()->back();
    }
}
