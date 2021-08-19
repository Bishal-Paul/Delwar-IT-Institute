<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'cat_slug',
        'cat_instraction',
        'cat_syllabus',
        'cat_duration',
        'cat_questions'
    ];

    function questions()
    {

        return $this->hasOne("App\Models\Question");
    }
    function postcategory()
    {

        return $this->hasOne(PostCategory::class, 'user_id');
    }

}
