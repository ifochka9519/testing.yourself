<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';


    public function test()
    {
        return $this->belongsTo('App\Test');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function answers_test()
    {
        $result = $this->answers()->inRandomOrder();

        return $result;
    }

    public function right_answer()
    {
        $answers = $this->answers();
        $right_answer = new Answer();
        foreach ($answers as $answer){
            if($answer->is_True){
                $right_answer = $answer;
            }
        }

        return $right_answer;
    }

    public function toArray()
    {
        $attributes = $this->attributesToArray();

        return array_merge($attributes, $this->relationsToArray());
    }


}
