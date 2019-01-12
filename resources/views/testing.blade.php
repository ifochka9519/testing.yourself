test.blade.php

@extends('layouts.master')

@section('header')
    Test
    @endsection

@section('content')

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fh5co-page-heading-lead">
                    {{$test->title}}
                    {{--<span class="fh5co-border"></span>--}}
                </h1>

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('engine_test',['id'=>$test->id])}}">
                            <ul class="fh5co-post">
                                @foreach ($test->questions_test as $question)
                                    <input type="hidden" name="{{$question->id}}">
                                    <li>

                                       {{-- <div class="fh5co-post-media"></div>--}}
                                            <div class="fh5co-post-blurb">
                                                <div class="row">
                                                    @if( count($answers_array)>0)
                                                        @if($answers_array[$question->id] == true)
                                                            <div class="col-md-4"><p class="alert-success">True</p></div>
                                                            @else
                                                            <div class="col-md-4"><p class="alert-danger">False</p></div>
                                                            @endif
                                                        @else
                                                        <div class="col-md-4"></div>
                                                    @endif
                                                    <div class="col-md-3"><h3>{{$question->content}}</h3><br></div>
                                                </div>
                                                <div class="row">
                                                        <ul class="fh5co-list-check">
                                                            @foreach($question->answers_test as $answer)

                                                                <div class="col-md-3">
                                                                <p><input title="answer" type="checkbox" name="{{$answer->id}}" value="{{$answer->id}}">  {{$answer->content}}</p><br>
                                                                </div>
                                                            @endforeach



                                                        </ul>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11"></div>
                                                    <div class="col-md-1">
                                                    </div>
                                                </div>
                                            </div>

                                    </li>

                                @endforeach
                                    @if( count($answers_array)>0)
                                    @else
                                        <button type="submit">Submit</button>
                                    @endif
                            </ul>
                    {{csrf_field()}}
                </form>
                @if( count($answers_array)>0)
                    <a href="{{route('all')}}">Back</a>
                @endif
            </div>




        </div>
    </div>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

@endsection