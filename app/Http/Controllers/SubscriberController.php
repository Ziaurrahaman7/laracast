<?php

namespace App\Http\Controllers;

use App\Services\Newslatter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubscriberController extends Controller
{
    public function __invoke(Newslatter $newslatter)
    {
        dd($newslatter);
            request()->validate(['email'=>'required|email']);
        
           try{
               $newslatter->subscribe(request('email'));
        
        }catch( \Exception $e){
            throw  ValidationException::withMessages([
                'email'=>'Email could not be added'
            ]);
        }
            return redirect('/')->with('success', 'You are now signed up for our newslatter');
        }
}
