<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'question',
        'option1',
        'option2',
        'option3',
        'option4'
    ];

    function category()
    {

        return $this->belongsTo("App\Models\ExamCategory");
    }

    
}
