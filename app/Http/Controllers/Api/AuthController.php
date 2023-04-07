<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Craftsman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = Craftsman::where('email', $request->email)->first();
        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                return $this->loginSuccess($user);
            } else {
                return response()->json(['result' => false, 'message' => 'Unauthorized', 'user' => null], 401);
            }
        } else {
            return response()->json(['result' => false, 'message' => 'User not found', 'user' => null], 401);
        }
    }

    protected function loginSuccess($user, $message = 'Successfully logged in')
    {
        $token = $user->createToken('Personal Access Token');
        $token->expires_at = Carbon::now()->addWeeks(100);
        return response()->json([
            'result' => true,
            'message' => $message,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString(),
            'user' => $user
        ]);
    }
}
