<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jeechem10tt01 extends Model
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
'solution'];

    public function users() {
        return $this->belongsToMany('App\User');
}}
