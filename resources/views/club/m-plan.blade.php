@extends('layouts.app')
@include('inc.m_navbar')
@include('inc.messages')
    <!-- body -->
    @section('content')
    <div class="my-3 mr-5 float-right">
        <!-- <button type="button" style="border:0;" data-toggle="modal"
            data-target="#exampleModalCenter"> -->
            <img class="img-thumbnail bg-d p-3" data-toggle="modal"
            data-target="#exampleModalCenter"
                style="border-radius:10rem; border-width:0px;max-width: 60px;float: right;" src="../img/plus.png">
        <!-- </button> -->
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
                        {!! Form::open(['method' => 'POST','action' => 'ClubofplanController@store']) !!}
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-3">
                                        {{Form::label('activity_name', '社課名稱')}}
                                    </div>
                                    <div class="col-9">
                                        {{Form::text('activity_name', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        {{Form::label('title', '社課日期')}}
                                      
                                    </div>
                                    <div class="col-9">
                                        {{ Form::date('date', date('Y-m-d'))}}
                                    </div>
                                </div>
                            </div>
                          {{ Form::hidden('club_semester',Session::get('club_semester'))}}
                        {{ Form::hidden('club_name',Session::get('club_name'))}}
                        {{Form::submit('Sudt', ['class'=>'btn btn-primary'])}}
                        {{ Form::hidden('flow_of_plan',Str::uuid()) }}
                        {!! Form::close() !!}
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary button-c" data-dismiss="modal">Close</button>
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
                @if(count($club)>0)
                    @foreach($club as $a)
                <div class="row">
                    <div class="col-4 text-center">
                        <p>{{ $a -> activity_name}}</p>
                        {!!Session::put('club_semester', $a->club_semester)!!}
                    </div>
                    <div class="col-4 text-center">
                        <span>{{ $a -> date}}</span>
                    </div>
                    <div class="col-4 text-center">
                        {!! Form::open(['method' => 'DELETE','action' => ['ClubofplanController@destroy',$a->flow_of_plan], 'class' => 'pull-right']) !!}
                        {{-- @php dd($a->flow_of_plan); @endphp --}}
                        {{ Form::hidden('club_name',Session::get('club_name'))}}
                        {{Form ::submit('Delete',['class' => 'btn btn-danger'])}}
                        {!!Form::close() !!}
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    @endsection