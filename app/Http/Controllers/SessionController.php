<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('session.login');
    }
    public function store(){
        $credential = request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

      if(auth()->attempt($credential)){
          return redirect('/')->with('success', 'login successfully');
      }

      return back()->withinput()->withErrors(['email'=>'Email could not varified','password'=>'Passowrd not matched']);


    }
    public function destroy(){
        Auth()->logout();
        return redirect('/')->with('success', 'Goodbuy');
    }
}
