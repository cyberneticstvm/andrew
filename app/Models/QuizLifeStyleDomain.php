<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizLifeStyleDomain extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function option()
    {
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }
}
