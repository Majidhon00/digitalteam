<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Localization extends Controller
{
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return view('profiles');
    }
}
