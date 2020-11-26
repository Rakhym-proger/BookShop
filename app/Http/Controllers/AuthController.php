<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup(){


        return view('auth.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'email'=>'required|unique:users|email|min:8|max:255',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|min:8',
            'name'=>'required|min:2|max:255',
            'surname'=>'required|min:2|max:255',
            'date'=>'required|date'
        ]);

        User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birth_date' => $request->input('date')
        ]);

        return redirect()
            ->route('home')
            ->with('info', 'Welcome to the BookShok.kz dear '.$request->input('name'));
    }
}
