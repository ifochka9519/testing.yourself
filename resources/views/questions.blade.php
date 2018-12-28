

@extends('layouts.master')

@section('header')
    Questions
    @endsection

@section('content')

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fh5co-page-heading-lead">
                    {{$test->title}}
                </h1>

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <form action="{{route('add_question')}}" method="post">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 class="fh5co-page-heading-lead">
                    {{count($test->questions)}} - your questions
                    <span class="fh5co-border"></span>
                </h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="question" class="sr-only">Question</label>
                    <input placeholder="Question" id="question" name="question" type="text" class="form-control input-lg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="right_answer" class="sr-only">Right answer</label>
                    <input placeholder="Right answer" id="right_answer" name="right_answer" type="text" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="wrong_answer_1" class="sr-only">Wrong answer 1</label>
                    <input placeholder="Wrong answer 1" id="wrong_answer_1" name="wrong_answer_1" type="text" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="wrong_answer_2" class="sr-only">Wrong answer 2</label>
                    <input placeholder="Wrong answer 2" id="wrong_answer_2" name="wrong_answer_2" type="text" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="wrong_answer_3" class="sr-only">Wrong answer 3</label>
                    <input placeholder="Wrong answer 3" id="wrong_answer_3" name="wrong_answer_3" type="text" class="form-control input-lg">
                </div>
                <input type="text" name="test_id" hidden value="{{$test->id}}">
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline form-control">Add question</button>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <a href="{{ route('test',['id'=>$test->id])}}" class="btn btn-primary form-control">Review test</a>
                    </div>
                </div>
            </div>

    </div>
    {{csrf_field()}}
    </form>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

@endsection