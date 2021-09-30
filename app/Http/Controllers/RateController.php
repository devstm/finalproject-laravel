<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth()->user()){
        $user_id=auth()->user()->id;
        $craftsman_id = $request->id;
        $rate_value = $request->rate;
        $rate = new Rate;
        $rate->craftsman_id = $craftsman_id;
        $rate->user_id = $user_id;
        $rate->rate_value = $rate_value;
        $rate->save();
        return back();
        }
        else
            echo 'jdfhsdlhgskdjghskjdghfsjdhfgsjkfdh';


        return view('test');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//        $man = Craftsman::find(1);
//        return $man->rates();
    }
    public function myRate(Craftsman $user){
        $data = Craftsman::findOrFail($user->id)->rates()->orderBy('id')->get();
        return view('craftsman.my_rate', compact('data'));
//        return $data;
    }
    // public function curtentLocaation(Craftsman $user)
    //    {
    //        $data = Craftsman::findOrFail($user->id)->locations()->orderBy('id')->get();
    //        return view('craftsman.current-location', compact('data'));
    //    }


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
    public function make(){
        $id = 1;
        $man = Craftsman::findOrFail($id);
        $maa = $man->getCraftsmanRate;
        return $maa;
    }
}
