<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Crafts;
use Illuminate\Http\Request;
use App\Http\Requests\CraftsRequest;

class CraftController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crafts::orderBy('updated_at', 'desc')->get();
        return view('crafts.crafts', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('crafts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CraftsRequest $request)
    {
        $crafts = new Crafts();
        $crafts->fill($request->only($crafts->getFillable()))->save();
        return back()->with('success', 'تم انشاء الحرفة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function show(Crafts $crafts)
    {
        // not implemented
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function edit(Crafts $craft)
    {
        $categories = Categories::all();
        return view('crafts.update',compact('craft','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function update(CraftsRequest $request, Crafts $craft)
    {
        $craft->fill($request->only($craft->getFillable()))->update();
        return redirect()->back()->with('success', 'تم تحديث الحرفة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crafts  $crafts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crafts $craft)
    {
        Crafts::findOrFail($craft->id)->delete();
        return redirect()->back()->with('success', 'تم حذف الحرفة بنجاح');
    }
}
