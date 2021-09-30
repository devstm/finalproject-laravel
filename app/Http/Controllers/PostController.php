<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use League\CommonMark\Inline\Element\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:craftsman');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //dddd
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PostRequest $request)
    {

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

//            // make thumbnails
//            $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
//            $thumb = Image::make($request->file('cover_image')->getRealPath());
//            $thumb->resize(80, 80);
//            $thumb->save('storage/cover_images/'.$thumbStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->craftsman_id = auth('craftsman')->id();
        $post->cover_image = $fileNameToStore;
        $post->save();
        return back()->with('success', 'تم انشاء المنشور بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function craftsman_posts(){
        $id= auth('craftsman')->id();
        $craftsman= Craftsman::findOrFail($id);
        $posts= $craftsman->Posts;
        return view('craftsman.pro',compact('posts'));
    }
}