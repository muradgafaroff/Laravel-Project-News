<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Author extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];

    public function news(){

        return $this->hasMany(News::class);

    }
}