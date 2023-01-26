<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('logout');
    }

    public function index(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        if (Auth::viaRemember()) {
            Auth::login(Auth::user());
            return redirect('/');
        }

        $remember = $request->remember ? true : false;
        if (Auth::attempt(['email' => request('email'), 'password' => $request->password], $remember)) {
            return redirect('/')->with('success-info', 'Login Successfully');
        }

        return redirect('/login')->with('error', 'Email or Password Incorrect');
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect('/')->with('success-info', 'Login Successfully');
    }

    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->save();
        }
        Auth::login($user);
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success-info', 'Logout Successfully');;
    }
}
