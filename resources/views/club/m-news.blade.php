
@extends('layouts.app')

@section('content')
    <div class="my-3 mr-5">
        <a href="/clubOfnews/create"><img class="img-thumbnail bg-d p-3"
                style="border-radius:10rem; border-width:0px;max-width: 60px;float: right;" src="../img/plus.png"></a>
    </div>
    <br><br><br>
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
                {!!Session::put('club_id', $n->club_id)!!}
                {!!Session::put('club_name', $n->club_name)!!}
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
                  <a href="/clubOfnews/{{$n->flow_of_news}}/edit">
                    <button type="button" class="btn button-c mx-3" style="border-radius: 25px;">
                        編輯
                    </button>
                </a>
                    {{-- <form action="clubOfnews/{{$n->flow_of_news}}" method="DELETE">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">刪除</button>
                    </form> --}}
                    {{-- {{dd($n->flow_of_news)}} --}}
                
                    <!-- DEL Button trigger modal -->
           

                        {{-- {!! Form::open(['method' => 'delete','action' => ['ClubofnewsController@destroy',$n->flow_of_news], 'class' => 'pull-right']) !!} --}}
                       

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
                            {{$n->news_content}}
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

    @endsection