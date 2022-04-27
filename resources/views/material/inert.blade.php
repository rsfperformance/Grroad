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
                    <h4 class="card-title">Инертные материалы</h4>
                    <!-- Nav tabs -->
                    <form action="/materials" method="post" class="custom-validation" enctype="multipart/form-data">
                    @csrf
                    <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Фото</h4>
                                                    <div>
                                                        <div class="col-md-12" style="text-align: center">
                                                            <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                        </div>
                                                        <input type="file" name="photo" class="form-control">
                                                        <input type="text" name="class" class="form-control" value="{{ $data }}" hidden>
                                                    </div>&nbsp;
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom01">Заголовок RU</label>
                                                                <input type="text" class="form-control" name="header_ru" id="validationCustom01">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Заголовок UZ</label>
                                                                <input type="text" class="form-control" name="header_uz" id="validationCustom02">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Заголовок EN</label>
                                                                <input type="text" class="form-control" name="header_en" id="validationCustom02">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Описание RU</label>
                                                            <div>
                                                                <textarea class="form-control" name="description1_ru" id="description1_ru"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Описание UZ</label>
                                                            <div>
                                                                <textarea class="form-control" name="description1_uz" id="description1_uz"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" name="description_en">Описание EN</label>
                                                            <div>
                                                                <textarea class="form-control" id="description1_en" name="description1_en"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>&nbsp;
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Характеристика RU</label>
                                                            <div>
                                                                <textarea class="form-control" id="description2_ru" name="description2_ru"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Характеристика UZ</label>
                                                            <div>
                                                                <textarea class="form-control" id="description2_uz"  name="description2_uz"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Характеристика EN</label>
                                                            <div>
                                                                <textarea class="form-control" id="description2_en" name="description2_en"></textarea>
                                                            </div>
                                                        </div>&nbsp;
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Вид песка RU</label>
                                                                    <input type="text" class="form-control" name="view_ru" id="validationCustom01">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom02">Вид песка UZ</label>
                                                                    <input type="text" class="form-control" name="view_uz" id="validationCustom02">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom02">Вид песка EN</label>
                                                                    <input type="text" class="form-control" name="view_en" id="validationCustom02">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Размер фракции, мм </label>
                                                                    <input type="text" class="form-control" name="size" id="validationCustom01">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Тип применения RU</label>
                                                                    <input type="text" class="form-control" name="type_ru" id="validationCustom01">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom02">Тип применения UZ</label>
                                                                    <input type="text" class="form-control" name="type_uz" id="validationCustom02">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom02">Тип применения EN</label>
                                                                    <input type="text" class="form-control" name="type_en" id="validationCustom02">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div><!-- end card -->
        </div>
    </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-pane " id="home4">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Фото</th>
                                        <th>Название</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $k=1 ?>
                                    @foreach(\App\Models\Materials::where('class', 1)->get() as $data)
                                        <tr>
                                            <th scope="row">{{ $k }}</th>
                                            <td><img src="{{ $data->photo }}" alt="" style="height: 50px"></td>
                                            <td>{{ $data->header_ru }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                            </td>
                                            <div class="modal fade bs-example-modal-lg{{ $data->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none; " aria-hidden="true">
                                                <div class="modal-dialog modal-lg" style="max-width: 80vw">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/materials/{{ $data->id }}" method="post" class="custom-validation" enctype="multipart/form-data">
                                                            @csrf
                                                                {{ method_field('put') }}
                                                            <!-- Tab panes -->
                                                                <div class="tab-content p-3 text-muted">
                                                                    <div class="col-xl-12">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <h4 class="card-title">Фото</h4>
                                                                                            <div>
                                                                                                <div class="col-md-12" style="text-align: center">
                                                                                                    <img src="{{ $data->photo }}" alt="" height="180px">
                                                                                                </div>
                                                                                                <input type="file" name="photo" class="form-control" value="{{ $data->photo }}">
                                                                                                <input type="text" name="class" class="form-control" value="{{ $data->class }}" hidden>
                                                                                            </div>&nbsp;
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom01">Заголовок RU</label>
                                                                                                        <input type="text" class="form-control" name="header_ru" id="validationCustom01" value="{{ $data->header_ru }}">
                                                                                                        <div class="valid-feedback">
                                                                                                            Успешно изменено!
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom02">Заголовок UZ</label>
                                                                                                        <input type="text" class="form-control" name="header_uz" id="validationCustom02" value="{{ $data->header_uz }}">
                                                                                                        <div class="valid-feedback">
                                                                                                            Успешно изменено!
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="validationCustom02">Заголовок EN</label>
                                                                                                        <input type="text" class="form-control" name="header_en" id="validationCustom02" value="{{ $data->header_en }}">
                                                                                                        <div class="valid-feedback">
                                                                                                            Успешно изменено!
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label">Описание RU</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" name="description1_ru" id="description1_ruedit{{ $data->id }}">{{ $data->description1_ru }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label">Описание UZ</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" name="description1_uz" id="description1_uzedit{{ $data->id }}">{{ $data->description1_uz }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label" name="description_en">Описание EN</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" name="description1_en" id="description1_enedit{{ $data->id }}">{{ $data->description1_en }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>&nbsp;
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label">Характеристика RU</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" id="description2_ruedit{{ $data->id }}" name="description2_ru">{{ $data->description2_ru }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label">Характеристика UZ</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" id="description2_uzedit{{ $data->id }}"  name="description2_uz">{{ $data->description2_uz }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label class="form-label">Характеристика EN</label>
                                                                                                    <div>
                                                                                                        <textarea class="form-control" id="description2_enedit{{ $data->id }}" name="description2_en">{{ $data->description2_en }}</textarea>
                                                                                                    </div>
                                                                                                </div>&nbsp;
                                                                                                <div class="row">
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom01">Вид песка RU</label>
                                                                                                            <input type="text" class="form-control" name="view_ru" id="validationCustom01" value="{{ $data->view_ru }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom02">Вид песка UZ</label>
                                                                                                            <input type="text" class="form-control" name="view_uz" id="validationCustom02"  value="{{ $data->view_uz }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom02">Вид песка EN</label>
                                                                                                            <input type="text" class="form-control" name="view_en" id="validationCustom02"  value="{{ $data->view_en }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom01">Размер фракции, мм </label>
                                                                                                            <input type="text" class="form-control" name="size" id="validationCustom01"  value="{{ $data->size }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom01">Тип применения RU</label>
                                                                                                            <input type="text" class="form-control" name="type_ru" id="validationCustom01" value="{{ $data->type_ru }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom02">Тип применения UZ</label>
                                                                                                            <input type="text" class="form-control" name="type_uz" id="validationCustom02" value="{{ $data->type_uz }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="validationCustom02">Тип применения EN</label>
                                                                                                            <input type="text" class="form-control" name="type_en" id="validationCustom02" value="{{ $data->type_en }}">
                                                                                                            <div class="valid-feedback">
                                                                                                                Успешно изменено!
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>&nbsp;
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12" style="text-align: center">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                                                Сохранить
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Удалить?</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Вы действительно хотите удалить?</p>
                                                            <div style="text-align: center">
                                                                <form action="/materials/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
                </div><!-- end card -->
            </div>
        </div> <!-- end col -->
    </div>

@endsection
