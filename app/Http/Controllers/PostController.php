<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;

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
            'posts'=>$categorie->post
        ]);
    }
    public function author(User $author){
        return view('cat',[
            // 'posts'=>Categorie::first()->post
            'comments'=>Comment::all(),
            'posts'=>$author->post
        ]);
    }
    // =============
    public function create(){
        return view('admin.postForm');
    }
    public function store(Request $request){
    //   $path = request('image')->store('uploads');
    $attributes = request()->validate([
         'title'=>'required',
         'image'=>'required|image',
         'slug'=>['required',Rule::unique('posts','slug')],
         'excrept'=>'required',
         'body'=>'required',
         'categorie_id'=>['required', Rule::exists('categories','id')]
     ]);  
     $attributes['user_id'] = auth()->id();
     $attributes['image'] = request()->file('image')->store('uploads');
    //  dd($attributes);
     Post::create($attributes);
     return redirect('/');
    }
}
