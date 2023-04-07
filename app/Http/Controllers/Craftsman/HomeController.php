<?php

namespace App\Http\Controllers\Craftsman;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Craftsman;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('craftsman.auth:craftsman');
    }

    /**
     * Show the Craftsman dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = auth('craftsman')->user();
        $posts = Post::all();
        return view('craftsman.home', compact('data','posts'));
    }
}