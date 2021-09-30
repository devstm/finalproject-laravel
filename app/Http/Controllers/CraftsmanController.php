<?php

namespace App\Http\Controllers;

use App\Models\Crafts;
use App\Models\Craftsman;
use App\Models\Location;
use Illuminate\Http\Request;

class CraftsmanController extends Controller
{
    public function edit(Craftsman $craftsman) {
        $crafts = auth('craftsman')->user();
//        $crafts = Craftsman::findOrFail($craftsman->id);
        return $crafts;
    }
    public function search(Request $request) {
        $name = $request->name;
        $city = $request->city;
        $neber = $request->neber;
        $data1 = Craftsman::where('name', 'like', '%'.$name.'%')->get();
        $loc = Location::whereCityId($city)->whereNeighborhoodId($neber)->first();
        if ($loc) {
            $locId=$loc->id;
            $data2 = Location::findOrFail($locId+1)->craftsmen()->get();
            $data= [$data1 , $data2];
            return view('search' , compact('data'));
        }
        else {
            $data2=false;
            $data= [$data1 , $data2];
            return view('search' , compact('data'));
        }


    }
    public function all() {
        $data = Craftsman::all();
        return view('craftsmen' , compact('data'));
    }
    public function rate(Request $request) {

    }
    public function destroy($id) {
        if(auth('admin')) {
            Craftsman::findOrFail($id)->delete();;
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }
    public function show(Craftsman $craftsman){
        $craftsman = Craftsman::findOrFail($craftsman->id);
        $no_of_posts = sizeof($craftsman->posts);
        $posts = $craftsman->posts;
        if ($no_of_posts > 0 ){
            return view('show_posts' , compact('posts'));
        }
        else {
            return view('show_plank_post');
        }
    }
}
