

@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 class="my-4"><strong>我的社團</strong></h5>
        @if(count($club) > 0)
        <!--要改參數-->
        @foreach($club as $n)
        <div class="col-lg-3 col-sm-6">
            <div class="card" style="border: 0px;">
                <div class="card-img-top image-1x1" style="background-image: url('img/club-2.jpg');"></div>
                <div class="card-body text-center bg">
                    <h6 class="card-title">
                        <strong>
                            <p class="a-col-d">所有社團</p>
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

        @if(count($role)>0)
        <div class="col-lg-3 col-sm-6">
            <div class="card" style="border: 0px;">
                <div class="card-img-top image-1x1" style="background-image: url('img/club-2.jpg');"></div>
                <div class="card-body text-center bg">
                    <h6 class="card-title">
                        <strong>
                            <p class="a-col-d">後台</p>
                        </strong>
                    </h6>
                    <div style="text-align: center;">
                        <a href="myclub/{{$n->club_name}}" class="btn button-c1">&nbsp;&nbsp;VIEW&nbsp;MORE&nbsp;&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <h1>222333555</h1>
        @endif
    </div>

@endsection