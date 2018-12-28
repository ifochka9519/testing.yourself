@extends('layouts.master')

@section('header')
    Create
@endsection

@section('content')

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fh5co-page-heading-lead">
                    Create New test
                    <span class="fh5co-border"></span>
                </h1>

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4">


                <div class="row">
                    <form action="{{route('create_title')}}" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="sr-only">Title</label>
                                <input placeholder="Title" name="title" id="title" type="text" class="form-control input-lg">
                            </div>
                        </div>


                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control" value="Create">

                            </div>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>



            <div class="col-md-4 col-md-pull-8">



                <div class="fh5co-sidebox">
                    <h3 class="fh5co-sidebox-lead">Для чого потрібна реєстрація?</h3>
                    <p>Зареєструвавшись одного разу, ви завжди матимете доступ до своїх тестів, щоб підтримувати свої знання і вдосконалювати свою пам'ять.</p>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="fh5co-spacer fh5co-spacer-lg"></div>

@endsection