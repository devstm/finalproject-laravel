<?php

namespace App\Http\Controllers;

use App\Models\Craftsman;
use App\Models\Location;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('craftsman.show-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $image = $request->file('image_path')->store('/public/images');
        $profile = new Profile();
        $profile->craftsman_id = $request->craftsman_id;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->martial_status = $request->martial_status;
        $profile->image_path = $request->file('image_path');
        $profile->description = $request->description;
        $profile->phone = $request->phone;
        $profile->contact = $request->contact;
        $profile->save();
        return back()->with('success', 'تم انشاء الملف الشخصي بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::where('craftsman_id',$id)->first();
        return view('craftsman.show-profile')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Profile $profile
     * @return Request
     */
    public function edit($id)
    {
        $profile = Profile::where('craftsman_id',$id)->first();
        // dd($profile);
        return view('craftsman.edit-profile')->with('profile', $profile);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\ProfileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $craftsman_id = $request->craftsman_id;
        $craftsman = Craftsman::findOrFail($craftsman_id);
        $profile_i = $craftsman->profile;
        $profile_id = $profile_i->id;
        if ($profile_id) {
            $image = 'images/' . rand(1,10000000) . '.' . $request->file('image_path')->getClientOriginalExtension();
            Storage::disk('public')->put($image, file_get_contents($request->file('image_path')));

            $profile = Profile::whereCraftsmanId($id)->update([
                'craftsman_id' => $request->craftsman_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'martial_status' => $request->martial_status,
                'image_path' => $image,
                'description' => $request->description,
                'phone' => $request->phone,
                'contact' => $request->contact
            ]);
            if ($profile) {
                return redirect('profile/' . $id)->with('success', 'تم تحديث الملف الشخصي بنجاح');
            }
        } else {
            $image = 'images/' . rand(1,10000000) . '.' . $request->file('image_path')->getClientOriginalExtension();
            Storage::disk('public')->put($image, file_get_contents($request->file('image_path')));
            $profile = new Profile();
            $profile->craftsman_id = $request->craftsman_id;
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->martial_status = $request->martial_status;
            $profile->image_path = $image;
            $profile->description = $request->description;
            $profile->phone = $request->phone;
            $profile->contact = $request->contact;
            $profile->save();
            return redirect('profile/' . $id)->with('success', 'تم انشاء الملف الشخصي بنجاح');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
