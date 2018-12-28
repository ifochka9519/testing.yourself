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
                            <ul class="fh5co-post">
                                @foreach ($test->questions as $question)
                                    <li>
                                        <a href="#">
                                       {{-- <div class="fh5co-post-media"></div>--}}
                                            <div class="fh5co-post-blurb">
                                                <h3>{{$question->content}}</h3><br>

                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10">
                                                        <ul class="fh5co-list-check">
                                                            @foreach($question->answers as $answer)
                                                                <input title="answer" type="checkbox" name="vehicle" value="{{$answer->id}}">{{$answer->content}}<br>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11"></div>
                                                    <div class="col-md-1">
                                                        <a href="{{ route('edit_test',['id'=>$question->id])}}">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                @endforeach

                            </ul>

            </div>




        </div>
    </div>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

@endsection