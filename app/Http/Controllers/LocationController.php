<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Crafts;
use App\Models\Craftsman;
use App\Models\Location;
use App\Models\neighborhoods;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function create(Craftsman $user)
    {
        $city = City::all();
        $neighborhoods = neighborhoods::all();
        $data = [$city, $neighborhoods, $user];
        return view('locations.create', compact('data'));
    }

    public function store(Craftsman $user, LocationRequest $request)
    {
        //variables
        $id = $request->craftsmanId;
        $user = Craftsman::findOrFail($id);
        $city = $request->city_id;
        $neighborhood = $request->neighborhood_id;
        // find if location is exists
        $location = Location::whereCityId($city)->whereNeighborhoodId($neighborhood)->first();
        if ($location) {
            $location->craftsmen()->attach($user);
            return redirect('current-locations/' . $id)->with('success', 'تم اضافة العنوان بنجاح');
        } else {
            $locat = new Location();
            $locat->fill($request->only($locat->getFillable()));
            $locat->save();
            $locat->craftsmen()->attach($user);
            return redirect('current-locations/' . $id)->with('success', 'تم اضافة العنوان بنجاح');
        }
    }

    public function currentLocation(Craftsman $user)
    {
        $data = Craftsman::findOrFail($user->id)->locations()->orderBy('id')->get();
        return view('craftsman.current-location', compact('data'));
    }

    public function destroy(Location $location)
    {
        if ($location->craftsmen()) {
            return back()->with('message', 'لا يمكن حذف هذا العنوان');
        }
        Location::findOrFail($location->id)->delete();
        return redirect()->back()->with('success', 'تم حذف العنوان بنجاح');

    }


    public function fetch(Request $request)
    {
//        $select =$request->get('select');
//        $value =$request->get('value');
//        $dependent =$request->get('dependent');
//        $data = Neighborhoods::where($select, $value )->groupedBy($dependent)->get();

        if (!$request->country_id) {
            dd($request->country_id);
//            $html = '<option value="">' . trans('global.pleaseSelect') . '</option>';
        } else {
            $html = '';
            $cities = Neighborhoods::where('city_id', $request->country_id)->get();
            foreach ($cities as $city) {
                $html .= '<option value="' . $city->id . '">' . $city->name . '</option>';
//                return $city;
            }
        }

        return response()->json(['html' => $html]);
    }
}