<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;

class CategoryController extends Controller
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
        $data = Categories::orderBy('updated_at', 'desc')->get();
        return view('categories.categories', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        $category = new Categories();
        $category->fill($request->only($category->getFillable()))->save();
        return back()->with('success', 'تم اضافة الفئة بنجاح.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        // not implemented
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param \App\Models\Categories $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Categories $category)
    {
        return view('categories.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, Categories $category)
    {
        $category->fill($request->only($category->getFillable()))->update();
        return redirect()->back()->with('success', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        Categories::findOrFail($category->id)->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
