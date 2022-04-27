@extends('admin.full')

@section('content')
    <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Добавить тип асфальтирования</h4>
                    <!-- Nav tabs -->
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <form action="/calculator" method="post" class="custom-validation" enctype="multipart/form-data">
                                        @csrf
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
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Категория</label>
                                                    <div>
                                                        <select name="category_id" class="form-control">
                                                            @foreach(\App\Models\Category::orderBy('id')->get() as $data)
                                                                <option value="{{ $data->id }}">{{ $data->category_ru }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Название RU</label>
                                                    <div>
                                                        <input name="service_name_ru" type="text" class="form-control" data-parsley-minlength="6" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Название UZ</label>
                                                    <div>
                                                        <input name="service_name_uz" type="text" class="form-control" data-parsley-minlength="6" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Название EN</label>
                                                    <div>
                                                        <input name="service_name_en" type="text" class="form-control" data-parsley-minlength="6" placeholder="">
                                                    </div>
                                                </div>
                                            </div>&nbsp;
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label">Описание RU</label>
                                                    <div>
                                                        <textarea name="description_ru" class="form-control" id="description1_ru"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Описание UZ</label>
                                                    <div>
                                                        <textarea name="description_uz" class="form-control" id="description1_uz"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Описание EN</label>
                                                    <div>
                                                        <textarea name="description_en" class="form-control" id="description1_en"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-xl-12">
                                            <div class="card-body">
                                                <div class="col-md-12" style="text-align: center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Сохранить
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div><!-- end card -->
            </div>
        </div> <!-- end col -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active " id="home4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Тип</th>
                                            <th>Описание</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $k=1 ?>
                                        @foreach(\App\Models\Service::where('category_id', 1)->get() as $data)
                                            <tr>
                                                <th scope="row">{{ $k }}</th>
                                                <td>{{ \App\Models\Category::find($data->category_id)->category_ru }}</td>
                                                <td>{!! $data->description_ru !!}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                                </td>
                                                <div class="modal fade bs-example-modal-lg{{ $data->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" style="max-width: 80vw">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/calculator/{{ $data->id }}" method="post" class="custom-validation" enctype="multipart/form-data">
                                                                    @csrf
                                                                    {{ method_field('put') }}
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Фото</h4>
                                                                                    <div>
                                                                                        <div class="col-md-12" style="text-align: center">
                                                                                            <img class="display-1 text-muted uil uil-cloud-upload" src="{{ $data->photo }}" style="height: 100px">
                                                                                        </div>&nbsp;
                                                                                        <input type="file" name="photo" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Категория</label>
                                                                            <div>
                                                                                <select name="category_id" class="form-control">
                                                                                    @foreach(\App\Models\Category::orderBy('id')->get() as $datum)
                                                                                        <option value="{{ $datum->id }}" @if($datum->id == $data->category_id) selected @endif>{{ $datum->category_ru }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название RU</label>
                                                                            <div>
                                                                                <input name="service_name_ru" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_ru }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название UZ</label>
                                                                            <div>
                                                                                <input name="service_name_uz" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_uz }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название EN</label>
                                                                            <div>
                                                                                <input name="service_name_en" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_en }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание RU</label>
                                                                            <div>
                                                                                <textarea name="description_ru" class="form-control" id="description2_ruedit{{ $data->id }}">{{ $data->description_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание UZ</label>
                                                                            <div>
                                                                                <textarea name="description_uz" class="form-control" id="description2_uzedit{{ $data->id }}">{{ $data->description_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание EN</label>
                                                                            <div>
                                                                                <textarea name="description_en" class="form-control" id="description2_enedit{{ $data->id }}">{{ $data->description_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="card-body">
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
                                                <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Удалить?</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Вы действительно хотите удалить: "{{ $data->service_name_ru }}"?</p>
                                                                <div style="text-align: center">
                                                                    <form action="/calculator/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active " id="home4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Тип</th>
                                            <th>Описание</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $k=1 ?>
                                        @foreach(\App\Models\Service::where('category_id', 2)->get() as $data)
                                            <tr>
                                                <th scope="row">{{ $k }}</th>
                                                <td>{{ \App\Models\Category::find($data->category_id)->category_ru }}</td>
                                                <td>{!! $data->description_ru !!}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="bx bx-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                                </td>
                                                <div class="modal fade bs-example-modal-lg{{ $data->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" style="max-width: 80vw">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myLargeModalLabel">Изменить</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/calculator/{{ $data->id }}" method="post" class="custom-validation" enctype="multipart/form-data">
                                                                    @csrf
                                                                    {{ method_field('put') }}
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h4 class="card-title">Фото</h4>
                                                                                    <div>
                                                                                        <div class="col-md-12" style="text-align: center">
                                                                                            <img class="display-1 text-muted uil uil-cloud-upload" src="{{ $data->photo }}" style="height: 100px">
                                                                                        </div>&nbsp;
                                                                                        <input type="file" name="photo" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label class="form-label">Категория</label>
                                                                            <div>
                                                                                <select name="category_id" class="form-control">
                                                                                    @foreach(\App\Models\Category::orderBy('id')->get() as $datum)
                                                                                        <option value="{{ $datum->id }}" @if($datum->id == $data->category_id) selected @endif>{{ $datum->category_ru }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название RU</label>
                                                                            <div>
                                                                                <input name="service_name_ru" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_ru }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название UZ</label>
                                                                            <div>
                                                                                <input name="service_name_uz" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_uz }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Название EN</label>
                                                                            <div>
                                                                                <input name="service_name_en" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->service_name_en }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание RU</label>
                                                                            <div>
                                                                                <textarea name="description_ru" class="form-control" id="description2_ruedit{{ $data->id }}">{{ $data->description_ru }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание UZ</label>
                                                                            <div>
                                                                                <textarea name="description_uz" class="form-control" id="description2_uzedit{{ $data->id }}">{{ $data->description_uz }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">Описание EN</label>
                                                                            <div>
                                                                                <textarea name="description_en" class="form-control" id="description2_enedit{{ $data->id }}">{{ $data->description_en }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="card-body">
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
                                                <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Удалить?</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Вы действительно хотите удалить: "{{ $data->service_name_ru }}"?</p>
                                                                <div style="text-align: center">
                                                                    <form action="/calculator/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
