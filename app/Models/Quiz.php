<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'q1' => 'array',
        'q2' => 'array',
        'q3' => 'array',
        'q4' => 'array',
        'q5' => 'array',
        'q6' => 'array',
        'q7' => 'array',
        'q8' => 'array',
        'q9' => 'array',
        'q10' => 'array',
        'q11' => 'array',
        'q12' => 'array',
        'q13' => 'array',
        'q14' => 'array',
        'q15' => 'array',
        'q16' => 'array',
        'q17' => 'array',
        'q18' => 'array',
        'q19' => 'array',
        'q20' => 'array',
        'q21' => 'array',
        'q22' => 'array',
        'q23' => 'array',
        'q24' => 'array',
        'q25' => 'array',
    ];

    public function domains()
    {
        return $this->hasMany(QuizLifeStyleDomain::class, 'quiz_id', 'id')->orderBy('id')->take(3);
    }
}
