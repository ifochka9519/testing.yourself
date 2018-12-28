

@extends('layouts.master')

@section('header')
    All
    @endsection

@section('content')

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fh5co-page-heading-lead">
                    My Tests
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
                                @foreach (Auth::user()->tests as $test)
                                    <li>
                                        <a href="{{ route('test',['id'=>$test->id])}}">
                                       {{-- <div class="fh5co-post-media"></div>--}}
                                            <div class="fh5co-post-blurb">
                                                <h3>{{$test->title}}</h3>
                                                <span class="fh5co-post-meta">{{$test->updated_at}}</span>
                                                <a href="{{ route('add',['id'=>$test->id])}}">Add</a>
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