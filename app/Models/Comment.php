<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function news(){
        return $this->belongsTo(News::class);
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function setUsernameAttribute($value){
        $this->attributes['username'] = 'kanan ' . strtolower($value);
    }
}
