<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';


    public static function boot(){
        parent::boot();
        static::creating(function($user_id){
            $user_id->user_id=auth()->user()->id;

        });
    }
}
