<?php 
namespace App\Services;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Contracts\UserContract;

class UserService implements UserContract
{
    public function signUp(Request $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->save();
        return response()->json(['message' => 'Successfully created user.'], 201);
    }

    public function signIn(Request $request)
    {


    }

}
