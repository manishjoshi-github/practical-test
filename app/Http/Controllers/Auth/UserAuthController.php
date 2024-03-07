<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
    	        $data = $request->validate([
            'name' => 'required|max:255',
           'email' => 'email:rfc,dns|max:30',
             'password' => 'required|string|min:6|confirmed',
        ]);

        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        $token = $user->createToken('API Token')->accessToken;

        return response([ 'user' => $user, 'token' => $token]);



    }


    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email:rfc,dns|max:30',
           'password' => 'required|string|min:6|confirmed',
        ]);


        

        if (!auth()->attempt($data)) {
            return response(['error_message' => 'Incorrect Details. 
            Please try again']);
        }

        $token = auth()->user()->createToken('API Token')->accessToken;

        return response(['user' => auth()->user(), 'token' => $token]);

    }




    public function logout (Request $request) {
    $token = $request->user()->token();
    $token->revoke();
    $response = ['message' => 'You have been successfully logged out!'];
    return response($response, 200);
}



}
