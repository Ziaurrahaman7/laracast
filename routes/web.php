<?php

use App\Http\Controllers\PostCommentCntroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
Use App\Models\Categorie;
use App\Models\User;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
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
Route::get('/', [PostController::class, 'index']);
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


Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('categorie/{categorie:slug}', [PostController::class, 'categorie']);

Route::get('author/{author:username}', [PostController::class, 'author']);
Route::post('author/comment',[PostCommentCntroller::class, 'store']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login',[SessionController::class, 'create'])->middleware('guest');
Route::post('login',[SessionController::class, 'store'])->middleware('guest');
Route::post('logout',[SessionController::class, 'destroy'])->middleware('auth');

Route::get('ping', function (){
    $mailchimp = new \MailchimpMarketing\ApiClient;

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us14'
    ]);

    $response =  $mailchimp->lists->getList("3662c4a49b");
    dd($response);
});