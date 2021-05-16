@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="m-5">
        <h5><strong>社課紀錄</strong></h5>
        {!! Form::open(['method' => 'PUT','action' =>  ['ClubactivityController@update',$activity->flow_of_activity], 'enctype' => 'multipart/form-data']) !!}
            <div class="my-3 p-5 bg-d light border  border-radius" style="border-radius: 10px;">
                <div class=" mb-3">
                    {{Form::label('name', '社課名稱')}}
                    {{Form::text('name', $activity->name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class=" mb-3">
                    {{Form::label('content', '內容')}}
                    {{Form::textarea('content', $activity->content, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-6"> 
                                {{Form::label('place', '地點')}}
                                {{Form::text('place', $activity->place, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="col-6">
                            {{Form::label('population', '人數')}}
                            {{Form::text('population', $activity->population, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-4 col-6">
                            {{Form::label('title', '社課日期')}}
                            {{ Form::date('date', date('Y-m-d'))}}
                        </div>
                        <div class="my-4 col-6 d-flex">
                            {{Form::label('PLC', '公開與否')}}
                            {{Form::radio('PLC', '1', true) }}
                            {{Form::label('PLC', '公開')}}
                            {{Form::radio('PLC', '0',false) }}
                            {{Form::label('PLC', '不公開')}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label><strong class="light">圖 片</strong></label>
                                {{Form::file('pic')}}
                            </div>
                    </div>
                </div>
            
            <div class="text-center">

                {{ Form::hidden('club_semester',Session::get('club_semester'))}}
                {{ Form::hidden('club_name',Session::get('club_name'))}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>

            {!! Form::close() !!}
            {!! Form::open(['method' => 'DELETE','action' => ['ClubactivityController@destroy',$activity->flow_of_activity], 'class' => 'pull-right']) !!}
            {{ Form::hidden('club_name',Session::get('club_name'))}}
            {{Form ::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
    </div>
</div>
    </div>
    </form>
    </div>
    @endsection