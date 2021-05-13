@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-d">
        <a class="nav-brand active" aria-current="page" href="m-home.html" style="padding:0">
            <img src="../img/nutc-logo.png" height="60.8px"></a>
        <ul class="nav justify-content-end">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-information.html">簡介/資訊</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-news.html">社團消息</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-class.html">社課紀錄</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-feedback.html">即時反饋</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-cal.html">活動月曆</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-ach.html">活動成果</a>
                    </li>
                    <li class="nav-item text-center px-3">
                        <a class="a-col" href="m-plan.html">學期計畫</a>
                    </li>
                </ul>
            </div>
            <li class="dropdown">
                <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-thumbnail"
                        style="padding: 0.1rem; background-color:#F8F8F6; border-radius:10rem; max-width:45.5px;"
                        src="img/head.jpg">
                </a>
                <div class="dropdown-menu" style="padding: 0;border: 0;background:none;">
                    <div class="main_style_2 m-0">
                        <div class="outer-round">
                            <div class="border-round">
                                <div class="round2"></div>
                            </div>
                        </div>
                        <h3 class="head2">郭郭郭</h3>
                        <div class="white">
                            <table style="margin:0 auto;border: 0;">
                                <tr>
                                    <th>學號：</th>
                                    <th>1110000000</th>
                                </tr>
                                <tr>
                                    <th>電話：</th>
                                    <th>0900-000-000</th>
                                </tr>
                                <tr>
                                    <th>Email：</th>
                                    <th>club123@email.com</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item dark text-center" href="#">學生</a></li>
                    <li><a class="dropdown-item dark text-center" href="#">登出</a></li>
                </ul>
            </li>
        </ul>

    </nav>

    <div class="m-5">

        <h5><strong>即時反饋</strong></h5>
        <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-5 text-center">
                        <strong>標題</strong> 
                        <hr>
                    </div>
                    <div class="col-1 text-center">
                        <strong>分類</strong> 
                        <hr>
                    </div>
                    <div class="col-2 text-center">
                        <strong>反饋日期</strong>                       
                        <hr>
                    </div>
                    <div class="col-4 text-center">
                        <strong>詳情</strong>
                        <hr>
                    </div>
                </div>
                @if(count($feedback)>0)
                    @php
                        $mnum = 1;
                    @endphp
                    @foreach($feedback as $f)
                        @php
                            $modal = "exampleModal".(string)$mnum;
                        @endphp
                <div class="row">
                    <div class="col-5 text-center">
                        <p>{{ $f -> feedback_title}}</p>
                    </div>
                    <div class="col-1 text-center">
                        <span class="badge badge-secondary spanF bg-r">{{ $f -> feedback_name}}</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>{{ $f -> date }}</span>
                    </div>
                    <div class="col-4 text-center">
                        <button type="button" class="btn button-c" data-toggle="modal" data-target="<?php echo "#".$modal ?>" 
                            style="border-radius: 25px;">
                            MORE
                        </button>
                        <div class="modal fade c0" id="<?php echo $modal ?>" tabindex="-1" role="dialog"
                        aria-labelledby="<?php echo $modal."Title" ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-d">
                                    <div class="modal-header">
                                        <h5 class="modal-title"  id="<?php echo $modal."Title" ?>">{{ $f -> feedback_title}}</h5>
                                        <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <p>反饋日期：{{ $f -> date}}</p>
                                            <p>
                                            {{ $f -> content}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary button-c" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection