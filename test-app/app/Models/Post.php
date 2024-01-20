<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //связь с таблицей
    protected  $table = 'posts';

    //указываем с какими полями может работать наша модель post
    protected  $fillable = [
        'title',
        'text',
        'image'
    ];
}
