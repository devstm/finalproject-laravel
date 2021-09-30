<?php

namespace App\Http\Controllers;

use App\Models\Crafts;
use App\Models\Craftsman;
use Illuminate\Http\Request;

class RelatedCraftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Craftsman $craftsman)
    {

        $data = Crafts::all();

        return view('related.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = $request->craftsmanId;
        $user = Craftsman::findOrFail($id);
        $craft_id = $request->craft_id;
        $craft = Crafts::findOrFail($craft_id);
        $craft->craftsman()->attach($user);
        return redirect('/current-crafts/' . $id)->with('success', 'تم اضافة العنوان بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = auth('craftsman')->user()->id;
        Crafts::findOrFail($id)->craftsman()->detach($id);
    }

    public function currentcrafts(Craftsman $user)
    {

        $data = Craftsman::findOrFail($user->id)->crafts()->orderBy('id')->get();
        return view('craftsman.current-crafts', compact('data'));
    }
}
