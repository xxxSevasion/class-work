<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    связь с таблицей - posts
    protected $table = 'posts';

//  Указываем с какими полями может работать наша модель Post
    protected  $fillable = [
        'title',
        'text',
        'image'
    ];

}
