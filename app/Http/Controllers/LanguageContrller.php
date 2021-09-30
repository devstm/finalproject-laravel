<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageContrller extends Controller
{
    public function convert($lang){
        App::setLocale($lang);
        return redirect()->back();
    }
}
