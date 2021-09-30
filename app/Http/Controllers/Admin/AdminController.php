<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Craftsman;
use App\Models\Reports;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $craftsmen = Craftsman::all();
        return view('admin.craftsmen-index', compact('craftsmen'));
    }

    public function rate()
    {
        $rate = [];
        $craftsmen = Craftsman::all();
        foreach ($craftsmen as $craftsman) {
            $rate[$craftsman->name] = $this->calculate_rate($craftsman);
        }
        return view('rate', compact('rate'));
    }

    public function calculate_rate(Craftsman $craftsman)
    {
        $rate = 0;
        $index= 0;
        $id = $craftsman->id;
        $craftsmen = Craftsman::findOrFail($id);
        $data = $craftsmen->Rates;
        //$index => $crafts
        foreach ($data as $index => $item) {
            $rate = $rate + $item->rate_value;
        }
        return number_format((float)($rate / ($index + 1)) * 20, 2, '.', '');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_reports()
    {
        $data = Reports::all();
        return view('reports.index' , compact('data'));
    }
}
