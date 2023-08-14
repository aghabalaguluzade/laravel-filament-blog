<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'content', 'slug', 'is_published'];

    public function category() {
        return $this->belongsToMany(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
