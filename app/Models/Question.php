<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function options()
    {
        return $this->hasMany(Option::class, 'qid', 'id');
    }

    public function optionsInRandom($qid)
    {
        return Option::inRandomOrder()->where('qid', $qid)->get();
    }
}
