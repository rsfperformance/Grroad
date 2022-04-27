@extends('admin.full')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">О компании</h4>
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="card-title">Фото</h4>
                                            <form action="/abouts/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                {{ method_field('put') }}
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom01">Площадь
                                                                завода</label>
                                                            <input type="text" class="form-control" name="plant_area"
                                                                   id="validationCustom01" value="{{ $data->plant_area }}">
                                                            <div class="valid-feedback">
                                                                Успешно изменено!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Количество
                                                                работников</label>
                                                            <input type="text" class="form-control" name="workers"
                                                                   id="validationCustom02" value="{{ $data->workers }}">
                                                            <div class="valid-feedback">
                                                                Успешно изменено!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Территория
                                                                карьера</label>
                                                            <input type="text" class="form-control" name="territory"
                                                                   id="validationCustom02" value="{{ $data->territory }}">
                                                            <div class="valid-feedback">
                                                                Успешно изменено!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom01">Лет на
                                                                рынке</label>
                                                            <input type="text" class="form-control" name="old"
                                                                   id="validationCustom01" value="{{ $data->old }}">
                                                            <div class="valid-feedback">
                                                                Успешно изменено!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Производство
                                                                инертных материалов</label>
                                                            <input type="text" class="form-control" name="projects"
                                                                   id="validationCustom02" value="{{ $data->projects }}">
                                                            <div class="valid-feedback">
                                                                Успешно изменено!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div>
                                                            <div class="col-md-12" style="text-align: center">
                                                                <img src="{{ $data->photo }}" class="display-1 text-muted uil uil-cloud-upload" style="height: 400px; width: 500px">
                                                            </div>&nbsp;
                                                            <input type="file" name="photo" class="form-control" value="{{ $data->photo }}">
                                                        </div>&nbsp;
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="validationCustom01">Описание RU</label>
                                                            <textarea type="text" class="form-control" name="description_ru" id="description1_ru">{{ $data->description_ru }}</textarea>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="validationCustom01">Описание UZ</label>
                                                            <textarea type="text" class="form-control" name="description_uz" id="description1_uz">{{ $data->description_uz }}</textarea>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label" for="validationCustom01">Описание EN</label>
                                                            <textarea type="text" class="form-control" name="description_en" id="description1_en">{{ $data->description_en }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3" style="text-align: center">
                                                        <button class="btn btn-success">Изменить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!-- end card -->
        </div>
    </div> <!-- end col -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">История компании</h4>
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="col-xl-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="card-title">Фото</h4>
                                        <form action="/history" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Выберите год</label>
                                                                    <select name="year" type="text" class="form-control" name="plant_area"
                                                                            id="validationCustom01">
                                                                        @foreach(\App\Models\Year::orderBy('id', 'asc')->get() as $data)
                                                                            <option value="{{ $data->id }}">{{ $data->year }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="text-align: center">
                                                                <div  style="margin-top: 30px">
                                                                    <button type="button" class="btn btn-primary" style="font-size: 15px" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Добавить год</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-top: 20px">
                                                            <div class="col-md-12">
                                                                <div class="card" style="height: 200px">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Фото</h4>
                                                                        <div>
                                                                            <div class="col-md-12" style="text-align: center">
                                                                                <i class="display-1 text-muted uil uil-cloud-upload"></i>
                                                                            </div>
                                                                            <input type="file" name="photo" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Описание RU</label>
                                                                <textarea type="text" class="form-control" name="description_ru"
                                                                          id="validationCustom02"></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Описание UZ</label>
                                                                <textarea type="text" class="form-control" name="description_uz"
                                                                          id="validationCustom02"></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Описание EN</label>
                                                                <textarea type="text" class="form-control" name="description_en"
                                                                          id="validationCustom02"></textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           <div style="text-align: center">
                                               <button type="submit" class="btn btn-success">Сохранить</button>
                                           </div>
                                        </form>
                                        <div class="modal fade bs-example-modal-center" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Добавить год</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/years" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Год</label>
                                                                    <input type="text" class="form-control" name="year"
                                                                           id="validationCustom01">
                                                                    <div class="valid-feedback">
                                                                        Успешно изменено!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div  style="margin-top: 30px">
                                                                <button class="btn btn-primary" style="font-size: 12px" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Сохранить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
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
                                        <th>Описание</th>
                                        <th>Год</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $k=1 ?>
                                    @foreach(\App\Models\History::all() as $data)
                                        <tr>
                                            <th scope="row">{{ $k }}</th>
                                            <td><img src="{{ $data->photo }}" alt="" style="height: 50px"></td>
                                            <td>{{ $data->decsription_ru }}</td>
                                            <td>{{ \App\Models\Year::find($data->year)->year }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
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
                                                            <form action="/history/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                {{ method_field('put') }}
                                                                <h4 class="card-title">Фото</h4>
                                                                <div>
                                                                    <div class="col-md-12" style="text-align: center">
                                                                        <img class="display-1 text-muted uil uil-cloud-upload" src="{{ $data->photo }}" style="height: 200px">
                                                                    </div>&nbsp;
                                                                    <input type="file" name="photo" class="form-control" value="{{ $data->photo }}">
                                                                </div>&nbsp;
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="validationCustom01">Выберите год</label>
                                                                        <select name="year" type="text" class="form-control" name="plant_area"
                                                                                id="validationCustom01">
                                                                            @foreach(\App\Models\Year::orderBy('id', 'asc')->get() as $datum)
                                                                                <option @if($datum->id == $data->year) selected @endif value="{{ $datum->id }}">{{ $datum->year }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="valid-feedback">
                                                                            Успешно изменено!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom01">Описание RU</label>
                                                                            <textarea type="text" class="form-control" name="description_ru">{{ $data->description_ru }}</textarea>
                                                                            <div class="valid-feedback">
                                                                                Успешно изменено!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Описание UZ</label>
                                                                            <textarea type="text" class="form-control" name="description_uz">{{ $data->description_uz }}</textarea>
                                                                            <div class="valid-feedback">
                                                                                Успешно изменено!
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Описание EN</label>
                                                                            <textarea type="text" class="form-control" name="description_en">{{ $data->description_en }}</textarea>
                                                                            <div class="valid-feedback">
                                                                                Успешно изменено!
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
                                            <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Удалить?</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Вы действительно хотите удалить?</p>
                                                            <div style="text-align: center">
                                                                <form action="/history/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
