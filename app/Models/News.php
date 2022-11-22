<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function category()
    {

        return $this->belongsTo(Category::class);

    }
    public function author()
    {

        return $this->belongsTo(Author::class, 'author_id');

    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeTitle($query, $title)
    {
        if($title != null){
            return $query->where('title', 'like', '%' . $title . '%');
        }
    }

    public function scopeDescription($query, $description)
    {
        if($description != null){
            return $query->where('description', 'like', '%' . $description . '%');
        }
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if($category_id != null){
            return $query->where('category_id', $category_id);
        }
    }
    public function scopeAuthorSearch($query, $author_id)
    {
        if($author_id != null){
            return $query->where('author_id', $author_id);
        }
    }
}
