@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="m-5">
        <h5><strong>社團消息</strong></h5>
        {!! Form::open(['method' => 'PUT','action' =>  ['ClubofnewsController@update',$news->flow_of_news], 'enctype' => 'multipart/form-data']) !!}
            <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-6">
                        {{Form::label('title', '日期')}}
                        {{ Form::date('date', date('Y-m-d'))}}
                    </div>
                    <div class="col-6">
                        {{Form::label('title', '消息類型')}}
                        {{Form::select('news_id', array('1' => '校內活動','2' => '校外活動','3' => '校內比賽','4' => '校外比賽'), '1')}}
                    </div>
                        <div class="col-12">
                                {{Form::label('news_title', '標題')}}
                                {{Form::text('news_title', $news->news_title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        
                        </div>
                        <div class="col-12">
                                {{Form::label('news_content', '內容')}}
                                {{Form::textarea('news_content', $news->news_content, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                        </div>
                        
                        <div class="col-12 ">
                            {{Form::label('PLC', '公開與否')}}
                            {{Form::radio('PLC', '1', true) }}
                            {{Form::label('PLC', '公開')}}
                            {{Form::radio('PLC', '0',false) }}
                            {{Form::label('PLC', '不公開')}}
                        </div>
                        <div class="col-6">
                            <label><strong class="light">圖 片</strong></label>
                            {{Form::file('news_pic')}}
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    {{ Form::hidden('club_id',Session::get('club_id'))}}
                    {{ Form::hidden('flow_of_news',$news->flow_of_news)}}
                    {{ Form::hidden('club_name',Session::get('club_name'))}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>

                
            
            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE','action' => ['ClubofnewsController@destroy',$news->flow_of_news], 'class' => 'pull-right']) !!}
            {{Form ::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}

        </div>
    </div>
@endsection