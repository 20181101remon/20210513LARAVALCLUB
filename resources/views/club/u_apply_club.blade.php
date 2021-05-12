
@extends('layouts.app')

@section('content')
  <div class="m-5">
    <div class="container-fluid">
      <div class="row">
        <h5><strong>創建社團</strong></h5>
          <div class="my-3 px-5 py-3 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <div class="row mt-3">
              {!! Form::open(['method' => 'POST','action' => 'PostController@store', 'enctype' => 'multipart/form-data']) !!}
                <div class="col-md-4">
                  {{Form::label('title', '社團名稱')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="col-md-4">
                  {{Form::label('title', '聯絡人')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                  </div>
                <div class="col-md-4">
                  {{Form::label('title', '連絡電話')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="col-md-6">
                  {{Form::label('title', '社團目的')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                  </div>
                <div class="col-md-6 position-relative">
                  {{Form::label('title', '經費來源')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="col-md-12">
                  {{Form::label('body', '社團簡介')}}
                  {{Form::textarea('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="col-12 text-center">
                  {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
                
                {!! Form::close() !!}
            </div>
          </div>
      </div>
    </div>
  </div>
  @endsection