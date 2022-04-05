<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'=>"jhon doe"
        ]);
        Post::factory(5)->create();
    //     User::truncate();
    //     Post::truncate();
    //     Categorie::truncate();
    //     $user = User::factory()->create();
    //      $parsonal = Categorie::create([
    //         'name'=>"parsonal",
    //         'slug'=>"parsonal"
    //     ]);
    //     $work = Categorie::create([
    //         'name'=>"work",
    //         'slug'=>"work"
    //     ]);
    //     $office = Categorie::create([
    //         'name'=>"office",
    //         'slug'=>"office"
    //     ]);

    //     Post::create([
    //         'user_id'=>$user->id,
    //         'categorie_id'=> $parsonal->id,
    //         'title'=>'test1',
    //         'slug'=>'test-test',
    //         'excrept'=>'test test',
    //         'body'=>'test test test'
    //     ]);
    //     Post::create([
    //         'user_id'=>$user->id,
    //         'categorie_id'=> $work->id,
    //         'title'=>'test2',
    //         'slug'=>'test-test2',
    //         'excrept'=>'test2 test2',
    //         'body'=>'test2 test2 test2'
    //     ]);
    //     Post::create([
    //         'user_id'=>$user->id,
    //         'categorie_id'=> $office->id,
    //         'title'=>'test3',
    //         'slug'=>'test-test3',
    //         'excrept'=>'test3 test3',
    //         'body'=>'test3 test3 test3'
    //     ]);
    }
}
