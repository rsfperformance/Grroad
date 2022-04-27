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
                    <h4 class="card-title">Наши партнеры</h4>
                    <!-- Nav tabs -->
                    <form action="/equipment" method="post" class="custom-validation" enctype="multipart/form-data">
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
                                                    </div>&nbsp;
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom01">Описание RU</label>
                                                                <input type="text" class="form-control" name="header_ru" id="validationCustom01">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Описание UZ</label>
                                                                <input type="text" class="form-control" name="header_uz" id="validationCustom02">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div><div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom02">Описание EN</label>
                                                                <input type="text" class="form-control" name="header_en" id="validationCustom02">
                                                                <div class="valid-feedback">
                                                                    Успешно изменено!
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
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
                                    @foreach(\App\Models\Equipment::all() as $data)
                                        <tr>
                                            <th scope="row">{{ $k }}</th>
                                            <td><img src="{{ $data->photo }}" alt="" style="height: 50px"></td>
                                            <td>{{ $data->header_ru }}</td>
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
                                                            <form action="/equipment/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                {{ method_field('put') }}
                                                                <h4 class="card-title">Фото</h4>
                                                                <div>
                                                                    <div class="col-md-12" style="text-align: center">
                                                                        <img class="display-1 text-muted uil uil-cloud-upload" src="{{ $data->photo }}" style="height: 200px">
                                                                    </div>
                                                                    <input type="file" name="photo" class="form-control" value="{{ $data->photo }}">
                                                                </div>&nbsp;
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom01">Описание RU</label>
                                                                            <input type="text" class="form-control" name="header_ru" id="validationCustom01" value="{{ $data->header_ru }}">
                                                                            <div class="valid-feedback">
                                                                                Успешно изменено!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Описание UZ</label>
                                                                            <input type="text" class="form-control" name="header_uz" id="validationCustom02" value="{{ $data->header_uz }}">
                                                                            <div class="valid-feedback">
                                                                                Успешно изменено!
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom02">Описание EN</label>
                                                                            <input type="text" class="form-control" name="header_en" id="validationCustom02"  value="{{ $data->header_en }}">
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
                                                                <form action="/equipment/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
