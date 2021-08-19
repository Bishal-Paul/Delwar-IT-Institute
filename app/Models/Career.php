<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'type',
        'location',
        'description',
        'responsivilities',
        'requirement',
        'experience',
        'education',
        'shift',
        'salary',
        'deadline',
        'benefits',
        'aditional_note'
    ];
}
