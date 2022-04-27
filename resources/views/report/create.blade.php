@extends('admin.full')

@section('content')

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
                    <h4 class="card-title">Новости</h4>
                    <!-- Nav tabs -->
                        <!-- Tab panes -->
                        <div class="col-xl-12">
                            <div class="card-body">
                                <div class="row">
                                    <form action="/reports" method="post" class="custom-validation" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Заголовок RU</label>
                                            <div>
                                                <input name="header_ru" type="text"
                                                       class="form-control"
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Заголовок UZ</label>
                                            <div>
                                                <input name="header_uz" type="text"
                                                       class="form-control"
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Заголовок EN</label>
                                            <div>
                                                <input name="header_en" type="text"
                                                       class="form-control"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Описание RU</label>
                                            <div>
                                                <textarea class="form-control" name="description_ru" id="ckeditorru"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Описание UZ</label>
                                            <div>
                                                <textarea class="form-control" name="description_uz" id="ckeditoruz"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" name="description_en">Описание EN</label>
                                            <div>
                                                <textarea class="form-control" id="ckeditoren" name="description_en"></textarea>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="col-md-12">
                                        <div class="card" style="height: 200px">
                                            <div class="card-body">
                                                <h4 class="card-title">Фото</h4>
                                                <div>
                                                    <div class="col-md-12" style="text-align: center">
                                                        <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                    </div>
                                                    <input type="file" name="photo_a" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Контент RU</label>
                                            <div>
                                                <textarea class="content-firstru" name="description1_ru" id="description1_ru"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент UZ</label>
                                            <div>
                                                <textarea class="content-firstuz" name="description1_uz" id="description1_uz"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент EN</label>
                                            <div>
                                                <textarea class="content-firsten" name="description1_en" id="description1_en"></textarea>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card" style="height: 200px">
                                                <div class="card-body">
                                                    <h4 class="card-title">Фото</h4>
                                                    <div>
                                                        <div class="col-md-12" style="text-align: center">
                                                            <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                        </div>
                                                        <input type="file" name="photo_b" class="form-control">
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
                                                            <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                        </div>
                                                        <input type="file" name="photo_c" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Контент RU</label>
                                            <div>
                                                <textarea class="content-secondru" name="description2_ru" id="description2_ru"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент UZ</label>
                                            <div>
                                                <textarea class="content-seconduz" name="description2_uz" id="description2_uz"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент EN</label>
                                            <div>
                                                <textarea class="content-seconden" name="description2_en" id="description2_en"></textarea>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="height: 200px">
                                                <div class="card-body">
                                                    <h4 class="card-title">Фото</h4>
                                                    <div>
                                                        <div class="col-md-12" style="text-align: center">
                                                            <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                        </div>
                                                        <input type="file" name="photo_d" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Контент RU</label>
                                            <div>
                                                <textarea class="content-thirdru" name="description3_ru" id="description3_ru"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент UZ</label>
                                            <div>
                                                <textarea class="content-thirduz" name="description3_uz" id="description3_uz"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Контент EN</label>
                                            <div>
                                                <textarea class="content-thirden" name="description3_en" id="description3_en"></textarea>
                                            </div>
                                        </div>
                                    </div>&nbsp;
                                    <div class="col-md-12" style="text-align: center">
                                        <button class="btn btn-success">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                </div><!-- end card -->
            </div>
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active " id="home4">
                            <div class="col-lg-12">
                                <h4>Список</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Заголовок RU</th>
                                            <th>Заголовок UZ</th>
                                            <th>Заголовок EN</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $k=1 ?>
                                        @foreach(\App\Models\Report::all() as $data)
                                            <tr>
                                                <th scope="row">{{ $k }}</th>
                                                <td>{{ $data->header_ru }}</td>
                                                <td>{{ $data->header_uz }}</td>
                                                <td>{{ $data->header_en }}</td>
                                                <td style="display: flex">
                                                    <button style="margin-right: 10px" type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                                </td>
                                                <div class="modal fade bs-example-modal-xl{{ $data->id }}" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Изменить</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/reports/{{ $data->id }}" method="post" class="custom-validation" enctype="multipart/form-data">
                                                                    @csrf
                                                                    {{ method_field('put') }}
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Заголовок RU</label>
                                                                            <div>
                                                                                <input name="header_ru" type="text"
                                                                                       class="form-control"
                                                                                       placeholder="" value="{{ $data->header_ru }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Заголовок UZ</label>
                                                                            <div>
                                                                                <input name="header_uz" type="text"
                                                                                       class="form-control"
                                                                                       placeholder="" value="{{ $data->header_uz }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Заголовок EN</label>
                                                                            <div>
                                                                                <input name="header_en" type="text"
                                                                                       class="form-control"
                                                                                       placeholder="" value="{{ $data->header_en }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание RU</label>
                                                                            <div>
                                                                                <textarea class="form-control" name="description_ru" id="ckeditorruedit{{ $data->id }}">{{ $data->description_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание UZ</label>
                                                                            <div>
                                                                                <textarea class="form-control" name="description_uz" id="ckeditoruzedit{{ $data->id }}">{{ $data->description_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label" name="description_en">Описание EN</label>
                                                                            <div>
                                                                                <textarea class="form-control" id="ckeditorenedit{{ $data->id }}" name="description_en">{{ $data->description_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="col-md-12">
                                                                        <div class="card" style="height: 200px">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Фото</h4>
                                                                                <div>
                                                                                    <div class="col-md-12" style="text-align: center">
                                                                                        <img src="{{ $data->photo_a }}" alt="" style="height: 100px; width: 100px">
                                                                                    </div>
                                                                                    <input type="file" name="photo_a" class="form-control" value="{{ $data->photo_a }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент RU</label>
                                                                            <div>
                                                                                <textarea class="content-firstru" name="description1_ru" id="description1_ruedit{{ $data->id }}">{{ $data->description1_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент UZ</label>
                                                                            <div>
                                                                                <textarea class="content-firstuz" name="description1_uz" id="description1_uzedit{{ $data->id }}">{{ $data->description1_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент EN</label>
                                                                            <div>
                                                                                <textarea class="content-firsten" name="description1_en" id="description1_enedit{{ $data->id }}">{{ $data->description1_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="card" style="height: 200px">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Фото</h4>
                                                                                    <div>
                                                                                        <div class="col-md-12" style="text-align: center">
                                                                                            <img src="{{ $data->photo_b }}" alt="" style="height: 100px; width: 100px">
                                                                                        </div>
                                                                                        <input type="file" name="photo_b" class="form-control" value="{{ $data->photo_b }}">
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
                                                                                            <img src="{{ $data->photo_c }}" alt="" style="height: 100px; width: 100px">
                                                                                        </div>
                                                                                        <input type="file" name="photo_c" class="form-control" value="{{ $data->photo_c }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент RU</label>
                                                                            <div>
                                                                                <textarea class="content-secondru" name="description2_ru" id="description2_ruedit{{ $data->id }}">{{ $data->description2_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент UZ</label>
                                                                            <div>
                                                                                <textarea class="content-seconduz" name="description2_uz" id="description2_uzedit{{ $data->id }}">{{ $data->description2_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент EN</label>
                                                                            <div>
                                                                                <textarea class="content-seconden" name="description2_en" id="description2_enedit{{ $data->id }}">{{ $data->description2_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card" style="height: 200px">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Фото</h4>
                                                                                    <div>
                                                                                        <div class="col-md-12" style="text-align: center">
                                                                                            <img src="{{ $data->photo_d }}" alt="" style="height: 100px; width: 100px">
                                                                                        </div>
                                                                                        <input type="file" name="photo_d" class="form-control" value="{{ $data->photo_d }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент RU</label>
                                                                            <div>
                                                                                <textarea class="content-thirdru" name="description3_ru" id="description3_ruedit{{ $data->id }}">{{ $data->description3_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент UZ</label>
                                                                            <div>
                                                                                <textarea class="content-thirduz" name="description3_uz" id="description3_uzedit{{ $data->id }}">{{ $data->description3_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Контент EN</label>
                                                                            <div>
                                                                                <textarea class="content-thirden" name="description3_en" id="description3_enedit{{ $data->id }}">{{ $data->description3_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="col-md-12" style="text-align: center">
                                                                        <button class="btn btn-success">Изменить</button>
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
                                                                    <form action="/reports/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
