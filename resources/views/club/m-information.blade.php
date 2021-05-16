@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="my-3 mr-5">
        @if(count($club)>0)
        @foreach($club as $c)
        <!-- m-information_edit.html 連結到編輯 -->
        <a href="/clubs/{{$c->club_id}}/edit"><img class="img-thumbnail bg"
                style="border-radius:10rem; border-width:0px;max-width: 60px;float: right;" src="../img/pencil.png"></a>
    </div>
    <div class="m-5">
        <h5><strong>社團簡介</strong></h5>
        <div class="my-3 p-3 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <table class="table table-borderless light" style="width: 0;">
                <tbody>
                    {!!Session::put('club_id', $c->club_id )!!}
                    {!!Session::put('club_semester', $c->club_semester )!!}
                    {!!Session::put('semester_id', $c->semester_id )!!}
                    {!!Session::put('club_name', $c->club_name )!!}
                
                    <tr>
                        <th>宗旨：</th>
                        <td>{{$c->club_purpose}}</td>
                    </tr>
                    <tr>
                        <th>簡介：</th>
                        <td>
                            <p>{{$c->club_introduce}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5><strong>社團資訊</strong></h5>
        <div class="my-3 p-3 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <table class="table table-borderless light" style="width: 0;">
                <tbody>
                    <tr>
                        <th>社課時間：</th>
                        <td>{{$c->club_introduce}}</td>
                    </tr>
                    <tr>
                        <th>社課地點：</th>
                        <td>{{$c->club_place}}</td>
                    </tr>
                    <tr>
                        <th>社課費用：</th>
                        <td>{{$c->club_fee}}</td>
                    </tr>
                    <tr>
                        <th>指導老師：</th>
                        <td>{{$c->club_teacher}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-3 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <div class="row">
                <div class="card-deck">
                    <div class="card bg-d" style="border: 0px;" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="card-head">
                            <h5><strong>社團 icon</strong></h5>
                        </div>
                        <form class="bg-d" action="">
                            <div class="card-img-top image-1x1" style="background-image: url('img/club-2.jpg');"></div>

                        </form>
                    </div>
                    <div class="card bg-d" style="border: 0px;" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="card-head">
                            <h5><strong>社團簡介圖</strong></h5>
                        </div>
                        <form class="bg-d" action="">
                            <div class="card-img-top image-3x4" style="background-image: url('img/activity.jpg');">
                            </div>

                        </form>
                    </div>
                    <div class="card bg-d" style="border: 0px;" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="card-head">
                            <h5><strong>我的社團封面</strong></h5>
                        </div>
                        <form class="bg-d" action="">
                            <div class="card-img-top image-3x4" style="background-image: url('img/club.jpg');">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    @endsection