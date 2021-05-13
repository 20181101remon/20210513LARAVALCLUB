@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="my-3 mr-5">
        <a href="m-ach_add.html"><img class="img-thumbnail bg-d p-3"
                style="border-radius:10rem; border-width:0px;max-width: 60px;float: right;" src="../img/plus.png"></a>
    </div>
    <div class="m-5">
        <h5><strong>活動成果</strong></h5>
        <form class="row g-3 needs-validation pt-3 m-0" novalidate>
            <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-5 text-center">
                            <strong>標題</strong>
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <strong>狀態</strong>
                            <hr>
                        </div>
                        <div class="col-2 text-center">
                            <strong>活動日期</strong>
                            <hr>
                        </div>
                        <div class="col-4 text-center">
                            <strong>詳情</strong>
                            <hr>
                        </div>
                    </div>
                    @if(count($club)>0)
                        @php
                            $mnum = 1;
                        @endphp
                    @foreach($club as $c)
                        @php
                            $modal = "exampleModal".(string)$mnum;
                        @endphp
                        <div class="row">
                        <div class="col-5 text-center">
                        <p>{{$c->activity_name}}</p>
                        </div>
                        <div class="col-1 text-center">
                            <span class="badge badge-secondary spanF bg-r">{{ $c -> news_name}}</span>
                        </div>
                        <div class="col-2 text-center">
                            <span>{{$c->date}}</span>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" class="btn button-c" data-toggle="modal" data-target="<?php echo "#".$modal ?>" style="border-radius: 25px;">
                            MORE
                            </button>
                            <!-- EDIT Button trigger modal -->
                            <a href="m-class_edit.html">
                                <button type="button" class="btn button-c mx-3" style="border-radius: 25px;">編輯</button>
                            </a>

                            <!-- DEL Button trigger modal -->
                            <button type="button" class="btn button-c" style="border-radius: 25px;">刪除</button>
                            <div class="modal fade c0" id="<?php echo $modal ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."Title" ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-d">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="<?php echo $modal."Title" ?>">{{$c->activity_name}}</h5>
                                    <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <label><strong class="light">人數：</strong>{{$c->result_activity_population}}</label><br>
                                        <label><strong class="light">地點：</strong>{{ $c -> activity_venue}}</label><br>
                                        <label><strong class="light">時間：</strong>{{ $c -> date}}</label><br>
                                        <label><strong class="light">協辦單位：</strong>{{ $c -> co_organizer}}</label><br>
                                        <label><strong class="light">活動：</strong>{{ $c -> activity_mainpoint}}</label><br>
                                        <label><strong class="light">檢討：</strong>{{ $c -> achievement}}</label><br>
                                    </div>
                                    <div class="image-3x4" style="background-image: url(img/class1.jpg);"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary button-c" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $mnum++
            @endphp
            @endforeach
        @endif
        </div>
    </div>
    </div>
        </form>
    </div>
    @endsection