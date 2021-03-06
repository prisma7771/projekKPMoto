<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $guarded =['id']; 

    public function posts(){
        return $this->hasMany(Post::class);
    } 

    // mengubah route menggunakan id ke slug
    public function getRouteKeyName(){
        return 'slug';
    }
    
    // Mendapatkan slug dari nama kategori
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
