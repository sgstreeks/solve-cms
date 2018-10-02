@extends('main')

@section('title', '| Homepage')

@section('content')

<style>

        .btn-primary {
            color: #fff;
            border-radius: 3px;
            background-image: linear-gradient( 122deg, #633991 0%, #c1156c 100%);
            box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.2);
            font-weight: 500;
            border: 0;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary:not([disabled]):not(.disabled).active,
        .btn-primary:not([disabled]):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            background-image: linear-gradient( 122deg, #4e2a75 0%, #a01059 100%);
            box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.3);
            color: #FFF;
        }


    </style
        <div class="row">

            <div class="col-md-12">
                <div class="jumbotron">
                  <h1><center>Welcome to Solve CMS!</center></h1>
                  <p class="lead"><center>This is the Content Management System of Solve Technologies</center></p>

<br>
                  <div class="text-center">

                        <a href="{{ route('navigation') }}" class="btn btn-primary">Let's make some awesome content</a>

                        </div>
            </div>
        </div></div> <!-- end of header .row -->


@stop
