<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;

class AuthController extends ResponseController
{

    public function signup(AuthRequest $request)
    {
      $userCreate = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'remember_token' => create->token
        ]);

        if(!$userCreate){
            return $this->failResponse("fail");
        }
        return $this->successResponse("success");

    }


    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->plainTextToken;
return response()->json([
    'status' => 'success',
    'token' => $token,
    'message' => 'login successfully'
]);
        }

    }


    public function logout(){
        $user = Auth::logout();
       $token =  $request->user()->currentAccessToken()->delete();

        dd($user);
        if(!$user){

            return response()->json($token); 
        }
        return response()->json($user); 

    }
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request){
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);
    //     if(Auth::attempt($request->only('email','password'))){
    //         $user = Auth::user();

    //         $products = $user->products;
    //         return view('welcome',compact('user','products'));
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);

    // }
    // public function showSignupForm()
    // {
    //     return view('auth.signup');
    // }

    // public function signupStore(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
            
    //         'role' => 'user',
    //     ]);

    //     Auth::login($user);

    //     return redirect()->route('dash');
    // }

}
