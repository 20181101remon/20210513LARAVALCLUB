{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('club.userCssJs')
    <title>MyClubs</title>

    <style>
        nav * {
            line-height: 45.5px;
        }
    </style>
</head>


<body class="bg dark">
@include('club.user')

    <div class="container">
        <h5 class="my-4"><strong>我的社團</strong></h5>
        @if(count($clubnews)>0) <!--要改參數-->
            @foreach($clubnews as $n)
        <div class="col-lg-3 col-sm-6">
            <div class="card" style="border: 0px;">
                <div class="card-img-top image-1x1" style="background-image: url('img/club-2.jpg');"></div>
                <div class="card-body text-center bg">
                    <h6 class="card-title">
                        <strong>
                            <p class="a-col-d">韓研社</p>
                        </strong>
                    </h6>
                </div>
            </div>
        </div>
            @endforeach
        @endif
    </div>

    @include('club.footer')

</body>

</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <h5 class="my-4"><strong>我的社團</strong></h5>
        @if(count($club) > 0) <!--要改參數-->
            @foreach($club as $n)
        <div class="col-lg-3 col-sm-6">
            <div class="card" style="border: 0px;">
                <div class="card-img-top image-1x1" style="background-image: url('img/club-2.jpg');"></div>
                <div class="card-body text-center bg">
                    <h6 class="card-title">
                        <strong>
                            <p class="a-col-d">{{$n->club_name}}</p>
                        </strong>
                    </h6>
                    <div style="text-align: center;">
                        <a href="myclub/{{$n->club_name}}" class="btn button-c1">&nbsp;&nbsp;VIEW&nbsp;MORE&nbsp;&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
        @endif
    </div>
</div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

@endsection
