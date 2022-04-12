<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','excrept','body','user_id','categorie_id','slug','image'];
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    protected $with = ['categorie','author'];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filter){
        $query->when($filter['search'] ?? false, fn ($query, $search)=>
            $query->where('title', 'like', '%' . $search. '%')
                    ->orWhere('body', 'like', '%' . $search. '%')
           );
        $query->when($filter['categorie'] ?? false, fn ($query, $categorie)=>
          $query->whereHas('categorie',fn($query)=>
          $query->where('slug', $categorie)
          )
          );
          $query->when($filter['author'] ?? false, fn ($query, $author)=>
          $query->whereHas('author',fn($query)=>
          $query->where('username', $author)
          )
          );
        //    return $query->get();
    }
}
