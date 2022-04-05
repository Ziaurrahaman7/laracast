<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
   public function index(){
       return view('register');
   }
   public function store(Request $request){
       $attribute = request()->validate([
            'name'=>'required|min:3|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|email|max:255',
            'password'=>'required|min:6|max:255',
        ]);
        // $attribute['password'] = bcrypt('password');
       $user= User::create($attribute);
        Auth()->login($user);
        return redirect('/')->with('success', 'successfully login');
   }
}
