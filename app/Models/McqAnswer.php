<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McqAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'mcq_question_id',
        'mcq_answers',
        'earning',
        'earning_ss',
        'student_img',
        'about_student',
        'success_story'
    ];

    
}
