<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);

       $user = User::add($request->all());
       $user->generatePassword($request->get('password'));

       return redirect('/government/login');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt([
            'email' =>$request->get('email'),
            'password'=>$request->get('password'),
            ])){
            return redirect('/government/');
        }
        else{
            return redirect()->back()->with('status', 'Неправильный логин или пароль');
        }


    }

    public function logout()
    {
        Auth::logout();
        return redirect('/government/login');
    }
}
