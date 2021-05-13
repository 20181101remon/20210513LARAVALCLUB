@extends('layouts.app')
@include('inc.navbar')
@section('content')
  <div class="cover">
    <h1 class="word">
      <div style="border: 2px #F8F8F6 solid; padding: 1vw; background-color:rgba(255, 255, 255, 0.199); "> Live the life
        you have imagined</div>
    </h1>
  </div>
  </div>



  <section class="m-5">
    <div id="container" style="margin-top: 6vh; ">
      <div id="left-col">
        <div class="tab-content " id="nav-tabContent">
          @if(count($showPLC)>0)
            @php
              $lnum = 1;
            @endphp
            @foreach($news as $n)
              @php
                $listid = "list-".(string)$lnum;
              @endphp
          <div class="tab-pane fade show active" id="<?php echo $listid ?>" aria-labelledby="list-home-list" role="tabpanel" style="position: relative;">
            <img src="../img/club.jpg" class="d-block w-100">
          </div>
            @endforeach
          @endif
        </div>
      </div>

      <div id="right-col" class="lign-self-center">
        <h3 class="c0" style="margin: 1vh;">🎇精彩活動與社課</h3>
        <div class="lign-self-center " style="margin: 5px; ">
          <div class="list-group " id="list-tab" role="tablist">
          @if(count($showPLC)>0)
            @php
              $mnum = 1;
            @endphp
            @foreach($news as $n)
              @php
                $modal = "exampleModal".(string)$mnum;
              @endphp
            <a class="list-group-item list-group-item-action active bg-d c0" id="list-home-list" data-toggle="list"
              href="#list-home" role="tab" aria-controls="home" >{{ $n -> news_title}}</a>
            @endforeach
          @endif
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container-fluid" style="background-color: #DFCFB8;">
    <div class="row" style="padding:3vh 9vw 3vh">
      <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title dark py-3 text-center"><strong>最新消息</strong></h4>
            <div class="card-img image-1x1" style="background-image: url('img/news.jpg');"></div>
            <p class="card-text py-4 m-0">With supporting text below as a natural lead-in to additional content.</p>
            <div style="text-align: center;">
              <a href="#" class="btn button-c1">&nbsp;&nbsp;VIEW&nbsp;MORE&nbsp;&nbsp;</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h4 class="card-title dark py-3 text-center"><strong>最新活動</strong></h4>
            <div class="card-img image-1x1" style="background-image: url('img/activity.jpg');"></div>
            <p class="card-text py-4 m-0">With supporting text below as a natural lead-in to additional content.</p>
            <div style="text-align: center;">
              <a href="#" class="btn button-c1">&nbsp;&nbsp;VIEW&nbsp;MORE&nbsp;&nbsp;</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h4 class="card-title py-3 text-center"><strong>最新成果展消息</strong></h4>
            <div class="card-img image-1x1" style="background-image: url('img/show.jpg');"></div>
            <p class="card-text py-4 m-0">With supporting text below as a natural lead-in to additional content.</p>
            <div style="text-align: center;">
              <a href="#" class="btn button-c1">&nbsp;&nbsp;VIEW&nbsp;MORE&nbsp;&nbsp;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection