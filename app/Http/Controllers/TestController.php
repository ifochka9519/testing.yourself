<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function create(Request $request)
    {
        $title = $request['title'];
        $user_id  = Auth::id();

        $test = new Test();
        $test->user_id = $user_id;
        $test->title = $title;

        $test->save();

        return view('questions')->with('test',$test);
    }

    public function add($id)
    {
        $test = Test::find($id);
        return view('questions')->with('test',$test);
    }
    public function edit_test($id)
    {
        $question = Question::find($id);
        $answers = DB::table('answers')->where('question_id', '=', $question->id)->lockForUpdate()->get();
        $test = $question->test();
        return view('edit')->with(['question'=>$question, 'answers'=>$answers, 'test'=>$test]);
    }

    public function test($id)
    {
        $test = Test::find($id);
        return view('test')->with('test',$test);
    }
    public function testing($id)
    {
        $test = Test::find($id);
        $answers_array = null;
        return view('testing')->with(['test'=>$test, 'answers_array'=>$answers_array]);
    }

    public function add_question(Request $request)
    {
        $test = Test::find($request['test_id']);
        $question = new Question();
        $question->content = $request['question'];
        $question->test_id = $request['test_id'];
        $question->save();
        $question->belongsTo($test);
        $answer = new Answer();
        $answer->content = $request['right_answer'];
        $answer->is_True = true;
        $answer->question_id = $question->id;
        $answer->save();
        $answer->belongsTo($question);
        $answer_1 = new Answer();
        $answer_1->content = $request['wrong_answer_1'];
        $answer_1->is_True = false;
        $answer_1->question_id = $question->id;
        $answer_1->save();
        $answer_1->belongsTo($question);
        $answer_2 = new Answer();
        $answer_2->content = $request['wrong_answer_2'];
        $answer_2->is_True = false;
        $answer_2->question_id = $question->id;
        $answer_2->save();
        $answer_2->belongsTo($question);
        $answer_3 = new Answer();
        $answer_3->content = $request['wrong_answer_3'];
        $answer_3->is_True = false;
        $answer_3->question_id = $question->id;
        $answer_3->save();
        $answer_3->belongsTo($question);
        return back();

    }

    public function save_question(Request $request)
    {
        $question = Question::find($request['question_id']);
        DB::table('answers')->where('question_id', '=', $question->id)->lockForUpdate()->delete();
        $answer = new Answer();
        $answer->content = $request['answer_0'];
        $answer->is_True = true;
        $answer->question_id = $question->id;
        $answer->save();
        $answer->belongsTo($question);
        $answer_1 = new Answer();
        $answer_1->content = $request['answer_1'];
        $answer_1->is_True = false;
        $answer_1->question_id = $question->id;
        $answer_1->save();
        $answer_1->belongsTo($question);
        $answer_2 = new Answer();
        $answer_2->content = $request['answer_2'];
        $answer_2->is_True = false;
        $answer_2->question_id = $question->id;
        $answer_2->save();
        $answer_2->belongsTo($question);
        $answer_3 = new Answer();
        $answer_3->content = $request['answer_3'];
        $answer_3->is_True = false;
        $answer_3->question_id = $question->id;
        $answer_3->save();
        $answer_3->belongsTo($question);
        $test = DB::table('tests')->where('id', '=', $question->test_id)->lockForUpdate()->first();
        $id = $test->id;
        $test = Test::find($id);
        return view('test')->with('test',$test);
    }

    public function testing_engine($id)
    {
        $test = Test::find($id);
        $questions = DB::table('questions')->where('test_id', '=', $test->id)->lockForUpdate()->get();

        $answers_array = [];
        $right = 0;

        foreach ($questions as $question){
            $answer = DB::table('answers')->where('question_id', '=', $question->id)->where('is_true', '=', true)->lockForUpdate()->first();

            if (isset($_POST[$answer->id])) {

                $answers_array[$question->id] = true;
                $right++;

            } else {

                $answers_array[$question->id] = false;
            }

        }

        $all = count($answers_array);

        $result =  (double) 100 * $right / $all;

        $test->last_result = $result;
        $test->last_passing_the_test = date('Y-m-d H:i:s');

        if( $test->best_result < $test->last_result){
            $test->best_result = (int) $test->last_result;
        }
        $test->save();


        return view('testing')->with(['test'=>$test, 'answers_array'=>$answers_array]);
    }
}
