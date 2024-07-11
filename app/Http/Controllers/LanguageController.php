<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function ganti($id)
    {
        if (!in_array($id, ['id', 'en', 'kr'])) {
            abort(400);
        }

        Session::put('locale', $id);
        return redirect()->back();
    }
}
