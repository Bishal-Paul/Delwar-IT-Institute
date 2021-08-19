<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Tagging\Taggable;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'tags',
        'image'
    ];
}
