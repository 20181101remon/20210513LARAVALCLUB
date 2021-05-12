@extends('layouts.app')


@section('content')

<body class="bg dark">
        @foreach($club as $c)
    <div class="wrap">
        <div class="container-fluid m-0 p-0">
            <div class="row m-0">
                <div class="item">
                    <div class="col-4">
                        <div class="txt">
                            <h5><strong>社團簡介</strong></h5>
                            <div class="txt-1">
                                <p>宗旨：{{$c->club_purpose}}</p>
                                <p>社團介紹：{{$c->club_introduce}}</p>
                            </div>
                            <hr>
                            </hr>
                            <h5><strong>社團資訊</strong></h5>
                            <div class="txt-1">
                                <p>社課時間：{{$c->club_time}}</p>
                                <p>社課地點：{{$c->club_place}}</p>
                                <p>社課費用：{{$c->club_fee}}</p>
                                <p>指導老師：{{$c->club_teacher}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="pic">
                            <img src="../../img/club.jpg">
                            <!--{{asset('$club->club_cover')}}-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
            
    </div>
    @endforeach
    <nav>
        <div class="nav nav-tabs bg-d " id="nav-tab" role="tablist">
            <a class="nav-link" href="homepage.html">Home</a>
            <a class="nav-item nav-link" id="nav-news-tab" data-toggle="tab" href="#nav-news" role="tab"
                aria-controls="nav-news" aria-selected="true">最新消息</a>
            <a class="nav-item nav-link" id="nav-calendar-tab" data-toggle="tab" href="#nav-calendar" role="tab"
                aria-controls="nav-calendar" aria-selected="false">活動月曆</a>
            <a class="nav-item nav-link" id="nav-class-tab" data-toggle="tab" href="#nav-class" role="tab"
                aria-controls="nav-class" aria-selected="false">社課紀錄</a>
            <a class="nav-item nav-link" id="nav-feedback-tab" data-toggle="tab" href="#nav-feedback" role="tab"
                aria-controls="nav-feedback" aria-selected="true">即時反饋</a>
            <a class="nav-item nav-link" id="nav-result-tab" data-toggle="tab" href="#nav-result" role="tab"
                aria-controls="nav-result" aria-selected="false">活動成果</a>
            <a class="nav-item nav-link" id="nav-plan-tab" data-toggle="tab" href="#nav-plan" role="tab"
                aria-controls="nav-plan" aria-selected="false">年度計畫</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent" style="margin: 3rem;">
        <div class="tab-pane fade show" id="nav-news" role="tabpanel" aria-labelledby="nav-news-tab">
            <h5><strong>最新消息</strong></h5>
            <table class="table table-hover" style="margin-top: 3vh; border: '0';">
                <thead>
                    <tr>
                        <th scope="col" width="40%">標題</th>
                        <th scope="col">發布日期</th>
                        <th scope="col">詳情</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="leftT">rerrere1</th>
                        <td class="text-center">Otto</td>
                        <td class="text-center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info bg-d light" data-toggle="modal"
                                data-target="#exampleModalCenter" style="border-radius: 25px;">
                                MORE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: #F8F8F6;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content" style="background-color:#2f2c40 ;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                style="color: #2f2c40;">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                style="background-color:  #F8F8F6; color: #2f2c40;">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="nav-calendar" role="tabpanel" aria-labelledby="nav-calendar-tab">
            <h5><strong>活動月曆</strong></h5>
            <div class="text-center">
                <iframe src="https://calendar.google.com/calendar/embed?src=2023youth%40gmail.com&ctz=Asia%2FTaipei"
                    style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-class" role="tabpanel" aria-labelledby="nav-class-tab">
            <h5><strong>社課紀錄</strong></h5>
            <div class="card mb-3 bg m-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="news-article-img" style="background-image: url(../img/club-1.jpg);"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">挖系社課紀錄</h5>
                            <p class="card-text">ㄗㄟ喜日期</p>
                            <p class="card-text">短短ㄉ社課介紹(???????This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 bg m-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="news-article-img" style="background-image: url(/img/club-1.jpg);"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">挖系社課紀錄</h5>
                            <p class="card-text">ㄗㄟ喜日期</p>
                            <p class="card-text">短短ㄉ社課介紹(???????This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 bg m-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="news-article-img" style="background-image: url(/img/club-1.jpg);"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">挖系社課紀錄</h5>
                            <p class="card-text">ㄗㄟ喜日期</p>
                            <p class="card-text">短短ㄉ社課介紹(???????This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
            <h5><strong>即時反饋</strong></h5>
            @include('inc.messages')
            {!! Form::open(['method' => 'POST','action' => 'CluboffeedbackController@store', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                @csrf
                {{Form::label('title', '反饋類型')}}
                {{Form::radio('feedback_id', '1', true) }}
                {{Form::label('feedback_id', '社課')}}
                {{Form::radio('feedback_id', '2',false) }}
                {{Form::label('feedback_id', '活動')}}
                {{Form::radio('feedback_id', '3',false) }}
                {{Form::label('feedback_id', '成果展')}}
                {{Form::radio('feedback_id', '4',false) }}
                {{Form::label('feedback_id', '其他')}}
            </div>
            <div class="form-group">
                {{Form::label('title', '標題')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                {{Form::label('body', '反饋內容')}}
                {{Form::textarea('content', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                {{ Form::hidden('club_id', $c->club_id) }}
                {{ Form::hidden('club_name', $c->club_name) }}
                {{ Form::hidden('date',date('Y-m-d H:i:s'))}}
                {{ Form::hidden('flow_of_feedback',Str::uuid()) }}
            
            </div>
            {{-- <div class="form-group">
                {{Form::file('cover_image')}}
            </div> --}}
            
                <br>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        <div class="tab-pane fade" id="nav-result" role="tabpanel" aria-labelledby="nav-result-tab">
            <h5><strong>活動成果</strong></h5>
            <div class="card mb-3 bg m-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="news-article-img" style="background-image: url(/img/club-2.jpg);"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">挖系活動成果</h5>
                            <p class="card-text">ㄗㄟ喜日期</p>
                            <p class="card-text">短短ㄉ介紹(???????This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 bg m-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="news-article-img" style="background-image: url(/img/club-2.jpg);"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">挖系活動成果</h5>
                            <p class="card-text">ㄗㄟ喜日期</p>
                            <p class="card-text">短短ㄉ介紹(???????This is a wider card with supporting text below as a
                                natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="nav-plan" role="tabpanel" aria-labelledby="nav-plan-tab">
            <h5><strong>年度計畫</strong></h5>
            <div class="container m-3">
                <div class="row text-center">
                    <div class="col-6 col-lg-3">
                        <div class="card m-2 card-border">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="card m-2 card-border">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="card m-2 card-border">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="card m-2 card-border">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="card m-2 card-border">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('club.footer')
    @endsection