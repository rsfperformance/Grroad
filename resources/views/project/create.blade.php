@extends('admin.full')

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-xl-12">--}}
            {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                    {{--<?php--}}
                    {{--$arr = [--}}
                        {{--1 => 'ru',--}}
                        {{--2 => 'uz',--}}
                        {{--3 => 'en'--}}
                    {{--]--}}
                    {{--?>--}}
                    {{--<h4 class="card-title">Наши проекты</h4>--}}
                        {{--<p>Добавить</p>--}}
                    {{--<!-- Nav tabs -->--}}
                    {{--<form action="/projects" method="post" class="custom-validation" enctype="multipart/form-data">--}}
                        {{--@csrf--}}
                        {{--<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">--}}
                            {{--@for($i=1; $i<=3; $i++)--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link @if($i==1) active @endif" data-bs-toggle="tab"--}}
                                       {{--href="#home{{ $i }}" role="tab" aria-selected="false">--}}
                                        {{--<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>--}}
                                        {{--<span class="d-none d-sm-block"--}}
                                              {{--style="text-transform: uppercase">{{ $arr[$i] }}</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--@endfor--}}
                        {{--</ul>--}}

                        {{--<!-- Tab panes -->--}}
                        {{--<div class="tab-content p-3 text-muted">--}}
                            {{--@for($i=1; $i<=3; $i++)--}}
                                {{--<div class="tab-pane @if($i==1) active @endif" id="home{{ $i }}" role="tabpanel">--}}
                                    {{--<div class="col-xl-12">--}}
                                        {{--<div class="card-body">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-6">--}}
                                                    {{--<label class="form-label">Название проекта</label>--}}
                                                    {{--<div>--}}
                                                        {{--<input name="header_{{ $arr[$i] }}" type="text"--}}
                                                               {{--class="form-control"--}}
                                                               {{--data-parsley-minlength="6" placeholder="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-6">--}}
                                                    {{--<label class="form-label">Описание</label>--}}
                                                    {{--<div>--}}
                                                        {{--<input name="description_{{ $arr[$i] }}" id="" cols="30" rows="3" class="form-control">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                                {{--</div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                            {{--@endfor--}}
                                {{--<div class="col-xl-12">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<label class="form-label">Срок</label>--}}
                                                        {{--<div>--}}
                                                            {{--<input name="time" type="text"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<label class="form-label">Высота</label>--}}
                                                        {{--<div>--}}
                                                            {{--<input name="height" type="text"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="row" style="margin-top: 60px">--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<label class="form-label">Территория</label>--}}
                                                        {{--<div>--}}
                                                            {{--<input name="territory" type="text"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<label class="form-label">Количество полос</label>--}}
                                                        {{--<div>--}}
                                                            {{--<input name="number_of_lanes" type="text"--}}
                                                                   {{--class="form-control"--}}
                                                                   {{--placeholder="">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="card" style="height: 200px">--}}
                                                    {{--<div class="card-body">--}}
                                                        {{--<h4 class="card-title">Фото</h4>--}}
                                                            {{--<div>--}}
                                                                {{--<div class="col-md-12" style="text-align: center">--}}
                                                                    {{--<i class="display-1 text-muted uil uil-cloud-upload"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<input type="file" name="photo" class="form-control">--}}
                                                            {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-12" style="text-align: center">--}}
                                            {{--<button type="submit" class="btn btn-primary waves-effect waves-light me-1">--}}
                                                {{--Сохранить--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div><!-- end card -->--}}
            {{--</div>--}}
         {{--</div> <!-- end col -->--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $arr = [
                        1 => 'ru',
                        2 => 'uz',
                        3 => 'en'
                    ]
                    ?>
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            @for($i=1; $i<=3; $i++)
                                <li class="nav-item">
                                    <a class="nav-link @if($i==1) active @endif" data-bs-toggle="tab"
                                       href="#home{{ $i+3 }}" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block"
                                              style="text-transform: uppercase">{{ $arr[$i] }}</span>
                                    </a>
                                </li>
                            @endfor
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active " id="home4">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Заголовок</th>
                                                    <th>Описание</th>
                                                    <th>Действия</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $k=1 ?>
                                                @foreach(\App\Models\Project::all() as $data)
                                                <tr>
                                                    <th scope="row">{{ $k }}</th>
                                                    <td>{{ $data->header_ru }}</td>
                                                    <td>{{ $data->description_ru }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                        {{--<button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>--}}
                                                    </td>
                                                    <div class="modal fade bs-example-modal-lg{{ $data->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        {{ method_field('put') }}
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Название проекта</label>
                                                                                <div>
                                                                                    <input name="header_ru" type="text"
                                                                                           class="form-control"
                                                                                           data-parsley-minlength="6" placeholder="" value="{{ $data->header_ru }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Описание</label>
                                                                                <div>
                                                                                    <input name="description_ru" id="" cols="30" rows="3" class="form-control" value="{{ $data->description_ru }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 30px">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Срок</label>
                                                                                            <div>
                                                                                                <input name="time" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Высота</label>
                                                                                            <div>
                                                                                                <input name="height" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->height }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row" style="margin-top: 30px">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Территория</label>
                                                                                            <div>
                                                                                                <input name="territory" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->territory }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Количество полос</label>
                                                                                            <div>
                                                                                                <input name="number_of_lanes" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->number_of_lanes }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="card" style="height: 200px">
                                                                                        <div class="card-body">
                                                                                            <h4 class="card-title">Фото</h4>
                                                                                            <div>
                                                                                                <div class="col-md-12" style="text-align: center">
                                                                                                    <img src="{{ $data->photo }}" alt="" style="height: 100px; width: 100px">
                                                                                                </div>
                                                                                                <input type="file" name="photo" class="form-control" style="margin-top: 10px">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12" style="text-align: center">
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                                                    Изменить
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Удалить?</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Вы действительно хотите удалить: "{{ $data->header_ru }}"?</p>
                                                                    <div style="text-align: center">
                                                                        <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            {{ method_field('delete') }}
                                                                            <button class="btn btn-success" style="margin-right: 20px">Да</button>
                                                                        </form>
                                                                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Нет</button>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                </tr>
                                                <?php $k++ ?>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <div class="tab-pane" id="home5">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Заголовок</th>
                                                <th>Описание</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $k=1 ?>
                                            @foreach(\App\Models\Project::all() as $data)
                                                <tr>
                                                    <th scope="row">{{ $k }}</th>
                                                    <td>{{ $data->header_uz }}</td>
                                                    <td>{{ $data->description_uz }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}uz"><i class="bx bx-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}uz"><i class="bx bxs-trash"></i></button>
                                                    </td>
                                                    <div class="modal fade bs-example-modal-lg{{ $data->id }}uz" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        {{ method_field('put') }}
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Название проекта</label>
                                                                                <div>
                                                                                    <input name="header_uz" type="text"
                                                                                           class="form-control"
                                                                                           data-parsley-minlength="6" placeholder="" value="{{ $data->header_uz }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Описание</label>
                                                                                <div>
                                                                                    <input name="description_uz" id="" cols="30" rows="3" class="form-control" value="{{ $data->description_uz }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 30px">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Срок</label>
                                                                                            <div>
                                                                                                <input name="time" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Высота</label>
                                                                                            <div>
                                                                                                <input name="height" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->height }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row" style="margin-top: 30px">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Территория</label>
                                                                                            <div>
                                                                                                <input name="territory" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->territory }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Количество полос</label>
                                                                                            <div>
                                                                                                <input name="number_of_lanes" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->number_of_lanes }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="card" style="height: 200px">
                                                                                        <div class="card-body">
                                                                                            <h4 class="card-title">Фото</h4>
                                                                                            <div>
                                                                                                <div class="col-md-12" style="text-align: center">
                                                                                                    <img src="{{ $data->photo }}" alt="" style="height: 100px; width: 100px">
                                                                                                </div>
                                                                                                <input type="file" name="photo" class="form-control" style="margin-top: 10px">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12" style="text-align: center">
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                                                    Изменить
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    <div class="modal fade bs-example-modal-center{{ $data->id }}uz" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Удалить?</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Вы действительно хотите удалить: "{{ $data->header_uz }}"?</p>
                                                                    <div style="text-align: center">
                                                                        <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            {{ method_field('delete') }}
                                                                            <button class="btn btn-success" style="margin-right: 20px">Да</button>
                                                                        </form>
                                                                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Нет</button>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                </tr>
                                                <?php $k++ ?>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="home6">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Заголовок</th>
                                                <th>Описание</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $k=1 ?>
                                            @foreach(\App\Models\Project::all() as $data)

                                                <tr>
                                                    <th scope="row">{{ $k }}</th>
                                                    <td>{{ $data->header_en }}</td>
                                                    <td>{{ $data->description_en }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}en"><i class="bx bx-pencil"></i></button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}en"><i class="bx bxs-trash"></i></button>
                                                    </td>
                                                    <div class="modal fade bs-example-modal-lg{{ $data->id }}en" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        {{ method_field('put') }}
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Название проекта</label>
                                                                                <div>
                                                                                    <input name="header_en" type="text"
                                                                                           class="form-control"
                                                                                           data-parsley-minlength="6" placeholder="" value="{{ $data->header_en }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Описание</label>
                                                                                <div>
                                                                                    <input name="description_en" id="" cols="30" rows="3" class="form-control" value="{{ $data->description_en }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 30px">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Срок</label>
                                                                                            <div>
                                                                                                <input name="time" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->time }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Высота</label>
                                                                                            <div>
                                                                                                <input name="height" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->height }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row" style="margin-top: 30px">
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Территория</label>
                                                                                            <div>
                                                                                                <input name="territory" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->territory }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label class="form-label">Количество полос</label>
                                                                                            <div>
                                                                                                <input name="number_of_lanes" type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="" value="{{ $data->number_of_lanes }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="card" style="height: 200px">
                                                                                        <div class="card-body">
                                                                                            <h4 class="card-title">Фото</h4>
                                                                                            <div>
                                                                                                <div class="col-md-12" style="text-align: center">
                                                                                                    <img src="{{ $data->photo }}" alt="" style="height: 100px; width: 100px">
                                                                                                </div>
                                                                                                <input type="file" name="photo" class="form-control" style="margin-top: 10px">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12" style="text-align: center">
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                                                    Изменить
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    <div class="modal fade bs-example-modal-center{{ $data->id }}en" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Удалить?</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Вы действительно хотите удалить: "{{ $data->header_en }}"?</p>
                                                                    <div style="text-align: center">
                                                                        <form action="/projects/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            {{ method_field('delete') }}
                                                                            <button class="btn btn-success" style="margin-right: 20px">Да</button>
                                                                        </form>
                                                                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Нет</button>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                </tr>
                                                <?php $k++ ?>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div><!-- end card -->
            </div>
        </div> <!-- end col -->
    </div>

@endsection
