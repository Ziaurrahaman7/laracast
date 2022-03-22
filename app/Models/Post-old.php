<?php 

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post{

public static function all(){
    // return File::resource_path("post");
//    $files = File:: files(resource_path("post"));
//     return array_map(fn($file) => $file->getContents(), $files);
}

public static function find($slug){
    // dd($path);
    if (!file_exists($path = resource_path("post/{$slug}.html"))) {
        // dd("not found");
        // abort(404);
        return redirect("/");
    };
    return  cache()->remember("post.{$slug}", 1200, fn ()=> file_get_contents($path));
}







}