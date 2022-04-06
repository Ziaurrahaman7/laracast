<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCommentCntroller extends Controller
{
    public function store(Post $post){
       request()->validate([
           'body'=>'required'
       ]);

        $post->comment()->create([
            'user_id'=>Auth()->user()->id,
            'body'=>request('body')
        ]);

        return back();
    }
}
