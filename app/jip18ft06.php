<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jip18ft06 extends Model
{
    protected $fillable = ['question_data',
    'option1',
    'option2',
    'option3',
    'option4',
    'correct_ans',
    'difficulty',
    'ideal_time',
    'question_type',
    'solution',
    'subject'];

    public function users() {
        return $this->belongsToMany('App\User');
}}
