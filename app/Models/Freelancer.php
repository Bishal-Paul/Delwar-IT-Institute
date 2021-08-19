<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'post',
        'image',
        'summary',
        'experience',
        'success_story',
        'ex_img',
        'success_img'
    ];
}
