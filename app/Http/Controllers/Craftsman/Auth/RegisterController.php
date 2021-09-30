<?php

namespace App\Http\Controllers\Craftsman\Auth;

use App\Models\Craftsman;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect craftsmen after registration.
     *
     * @var string
     */
    protected $redirectTo = '/craftsman';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('craftsman.guest:craftsman');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'username' => ['required', 'string', 'max:255', 'unique:craftsmen'],
//            'address' => ['required', 'string', 'max:255'],
//            'phone' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:craftsmen'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new craftsman instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Craftsman
     */
    protected function create(array $data)
    {
        return Craftsman::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'profile_id' => $data['profile_id'],
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('craftsman.auth.register');
    }



    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('craftsman');
    }
}
