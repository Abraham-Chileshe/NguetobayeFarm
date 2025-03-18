<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale($lang)
    {
        if (in_array($lang, ['en','es','fr','ru','zh','ar'])){
            App::setLocale($lang);
            Session::put('locale',$lang);
        }

        return back();
    }
}
