<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Contracts\UserContract;

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
}
