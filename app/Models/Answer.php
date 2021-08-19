<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
    

    function user()
    {

        return $this->belongsTo(User::class);
    }
    function category()
    {

        return $this->belongsTo(ExamCategory::class);
    }
}
