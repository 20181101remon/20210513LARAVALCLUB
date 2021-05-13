@extends('layouts.app')
@include('inc.m_navbar')
@section('content')
    <div class="m-5">
        <h5><strong>活動成果</strong></h5>
        <form class="row g-3 needs-validation pt-3" novalidate>
            <div class="my-3 p-5 bg-d light border  border-radius" style="border-radius: 10px;">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput"><strong>標 題</strong></label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2"><strong>內 文</strong></label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2"><strong>活動檢討</strong></label>
                </div>
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"><strong>地點</strong></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"><strong>協辦單位</strong></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"><strong>人數</strong></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-4 col-6">
                            <label><strong class="light">活動日期</strong></label>
                            <input id="date" type="date">
                        </div>
                        <div class="my-4 col-6 d-flex">
                            <label class="pr-2"><strong class="light">狀態</strong></label>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    公開
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    不公開
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label><strong class="light">圖 片</strong></label>
                                <input class="form-control my-2" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center">
                    <button class="btn button-c" type="submit" style="width: 8rem;height: 3rem;">
                        <h5 class="m-0"><strong>發 布</h5></strong>
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endsection