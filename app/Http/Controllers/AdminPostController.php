<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;

class AdminPostController extends Controller
{
   public function index(){
       $posts = Post::paginate(10);
       return view('admin.postlist', compact('posts'));
   }
   public function edit(Post $post){
       return view('admin.postEdit', ['post'=>$post]);
   }
   public function update(Post $post){
    //   $path = request('image')->store('uploads');
    $attributes = request()->validate([
         'title'=>'required',
         'image'=>'image',
         'slug'=>['required',Rule::unique('posts','slug')->ignore($post->id)],
         'excrept'=>'required',
         'body'=>'required',
         'categorie_id'=>['required', Rule::exists('categories','id')]
     ]);  
     if(isset($attributes['image'])){
     $attributes['image'] = request()->file('image')->store('uploads');
     }
    //  dd($attributes);
     $post->update($attributes);
     return redirect('/');
    }
    public function destroy(Post $post){
     $post->delete();
     return back()->with('success', 'delete success');

    }
}
