<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // dd(request(['search']));
         return view('post', [
             "post"=>Post::latest()->filter(request(['search','categorie','author']))->paginate(3)
         ]);
    }
    public function show(Post $post){
        return view('post',[
             'post'=>$post
         ]);
    }
    public function categorie(Categorie $categorie){
        return view('cat',[
            // 'posts'=>Categorie::first()->post
            'posts'=>$categorie->post
        ]);
    }
    public function author(User $author){
        return view('cat',[
            // 'posts'=>Categorie::first()->post
            'posts'=>$author->post
        ]);
    }
}
