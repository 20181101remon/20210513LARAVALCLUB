@extends('layouts.app')
@include('inc.m_navbar')
    <!-- body -->
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
    <div class="my-3 mr-5 float-right">
        <button type="button" style="border:0;background-color: #eee7dd;" data-toggle="modal"
            data-target="#exampleModalCenter">
            <img class="img-thumbnail bg-d p-3"
                style="border-radius:10rem; border-width:0px;max-width: 60px;float: right;" src="../img/plus.png">
        </button>
        <div class="modal fade c0" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-d">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">新增活動</h5>
                        <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <label><strong class="light">活動名稱</strong></label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" style="height: 32px;"
                                            id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label><strong class="light">活動日期</strong></label>
                                    </div>
                                    <div class="col-9">
                                        <input id="date" type="date">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-secondary button-c" type="submit">新 增</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5">
        <h5><strong>學期計畫</strong></h5>
        <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <div class="container-fluid border border-light rounded">
                <div class="row mt-3">
                    <div class="col-4 text-center">
                        <strong>標題</strong>
                        <hr>
                    </div>
                    <div class="col-4 text-center">
                        <strong>活動日期</strong>
                        <hr>
                    </div>
                    <div class="col-4 text-center">
                        <strong>詳情</strong>
                        <hr>
                    </div>
                </div>
                @if(count($activity)>0)
                    @foreach($activity as $a)
                <div class="row">
                    <div class="col-4 text-center">
                        <p>{{ $a -> activity_name}}</p>
                    </div>
                    <div class="col-4 text-center">
                        <span>{{ $a -> date}}</span>
                    </div>
                    <div class="col-4 text-center">
                        <button type="button" class="btn button-c" style="border-radius: 25px;">
                            刪除
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection