<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\UserContract;
use App\Models\User;

use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class UserController extends Controller
{
    protected $userContractRetriever;

    public function __construct(UserContract $userContract)
    {
        $this->userContractRetriever = $userContract;
    }

    public function signUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required'
        ]);

        return $this->userContractRetriever->signUp($request);
    }

    public function signIn(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'error' => 'Invalid Credentials!'
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'error' => 'Could not create token!'
            ], 500);
        }
        return response()->json([
            'token' => $token
        ], 201);

        return $this->userContractRetriever->signIn($request);
    }
}
