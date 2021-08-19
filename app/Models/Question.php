<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question1',
        'question2',
        'question3',
        'question4',
        'category_id'
    ];
    function category(){

        return $this->belongsTo("App\Models\ExamCategory");
    }
}
