

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

                </h1>

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <form action="{{route('save_question')}}" method="post">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 class="fh5co-page-heading-lead">
                    <span class="fh5co-border"></span>
                </h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="question" class="sr-only">Question</label>
                    <input value="{{$question->content}}" placeholder="Question" id="question" name="question" type="text" class="form-control input-lg">
                </div>
            </div>
            <div class="col-md-4">
                @php
                $i=0;
                @endphp
                @foreach($answers as $answer)
                <div class="form-group">
                    <input value="{{$answer->content}}" id="wrong_answer_1" name="{{'answer_'.$i}}" type="text" class="form-control input-lg">
                </div>
                @php
                    ++$i;
                    @endphp
                    @endforeach
                    <input type="text" name="question_id" hidden value="{{$question->id}}">
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline form-control">Save question</button>
                </div>
            </div>
        </div>
    </div>
    {{csrf_field()}}
    </form>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

@endsection