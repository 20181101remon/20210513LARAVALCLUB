@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="m-5">
        <h5><strong>社課紀錄</strong></h5>
        {!! Form::open(['method' => 'POST','action' => 'ClubofclassrecordController@store', 'enctype' => 'multipart/form-data']) !!}
            <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
            
                    {{Form::label('class_name', '社課名稱')}}
                    {{Form::text('class_name', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    {{Form::label('class_teacher', '授課老師')}}
                    {{Form::text('class_teacher', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
       
                    {{Form::label('class_place', '上課地點')}}
                    {{Form::text('class_place', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                {{Form::label('class_contect', '內容')}}
                {{Form::textarea('class_contect', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
         
            <div class="container-fluid">
                <div class="row">
                    <div class="my-4 col-6 p-0">
                        {{Form::label('title', '社課日期')}}
                        {{ Form::date('date', date('Y-m-d'))}}
                    </div>
                    <div class="my-4 col-6 p-0 d-flex">
                        {{Form::label('PLC', '公開與否')}}
                        {{Form::radio('PLC', '1', true) }}
                        {{Form::label('PLC', '公開')}}
                        {{Form::radio('PLC', '0',false) }}
                        {{Form::label('PLC', '不公開')}}
                    </div>
                    <div class="row">
                        <div class="col-4 p-0">
                            <label><strong class="light">圖 片</strong></label>
                            {{Form::file('pic')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
     
                {{ Form::hidden('club_semester',Session::get('club_semester'))}}
                {{ Form::hidden('club_name',Session::get('club_name'))}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                {{ Form::hidden('flow_of_pic',Str::uuid()) }}
                {{ Form::hidden('flow_of_classrecord',Str::uuid()) }}

            </div>
            {!! Form::close() !!}
    </div>

    </div>
    </form>
    </div>
    @endsection