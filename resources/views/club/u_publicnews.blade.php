@extends('layouts.app')
@include('inc.navbar')
@section('content')
  <div class="m-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-7">
          <h5><strong>最新消息</strong></h5>
        </div>

        <div class="col-5">
          <div class="dropdown float-right">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#2f2c40 ; ">
              消息類型
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($types as $type)
              <a class="dropdown-item" href="#">{{$type->news_name}}</a>
          @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
      <div class="container-fluid border border-light rounded">
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
            <strong>發布日期</strong>
            <hr>
          </div>
          <div class="col-4 text-center">
            <strong>詳情</strong>
            <hr>
          </div>
        </div>
        @if(count($clubnews)>0)
        @php
            $mnum = 1;
          @endphp
          @foreach($clubnews as $n)
          @php
              $modal = "exampleModal".(string)$mnum;
            @endphp
            <div class="row">
              <div class="col-5 text-center">
              <p>{{$n->news_title}}</p>
              </div>
              <div class="col-1 text-center">
                <span class="badge badge-secondary spanF bg-r">{{ $n -> news_name}}</span>
              </div>
              <div class="col-2 text-center">
                <span>{{$n->date}}</span>
              </div>
              <div class="col-4 text-center">
                <button type="button" class="btn button-c" data-toggle="modal" data-target="<?php echo "#".$modal ?>" style="border-radius: 25px;">
                MORE
                </button>
                <div class="modal fade c0" id="<?php echo $modal ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal."Title" ?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-d">
                      <div class="modal-header">
                        <h5 class="modal-title" id="<?php echo $modal."Title" ?>">{{$n->news_title}}</h5>
                        <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div>
                          <p>{{$n->news_content}}</p>
                        </div>
                        <div class="image-3x4" style="background-image: url(../img/news_1.jpg);"></div>
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
  </div>
  </div>
  @endsection