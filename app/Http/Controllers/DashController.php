<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function chooselogin(){
        return view('dash.login');
    }
    public function chooseregister(){
        return view('dash.signup');
    }
}
