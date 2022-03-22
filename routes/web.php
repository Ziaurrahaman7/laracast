<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // $posts = Post::all();
    // // dd($posts);
    // return view('posts',["posts"=>$posts]);
    $document = YamlFrontMatter::parse(file_get_contents(resource_path("post/post1.html")));
    dd($document);
});
// =================html file load system ===========
// Route::get('post/{post}', function ($slug) {
//     // return $slug;
    
//     $path = __DIR__ . "/../resources/post/{$slug}.html";
//     // dd($path);
//     if (!file_exists($path)) {
//         // dd("not found");
//         // abort(404);
//         return redirect("/");
//     }
//     $post = cache()->remember("post.{$slug}", 5, function () use($path){
//         var_dump($path);
//          return file_get_contents($path);
//     });
    
// $post = Post::find($slug);
//     return view('post', [
//         'post' => $post
//     ]);
// });


Route::get('post/{post:slug}', function (Post $post) {
 return view('post',[
    //  'post'=>Post::findOrFail($id)
     'post'=>$post
 ]);
});
// =================html file load system end===========
