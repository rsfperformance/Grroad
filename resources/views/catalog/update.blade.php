@extends('admin.full')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Каталог</h4>
                    <form action="/catalogs/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" class="form-control" name="catalog" value="{{ $data->catalog }}">
                                            <div class="valid-feedback">
                                                Успешно изменено!
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{ $data->catalog }}"><button class="btn btn-success" type="button"><i class="uil-eye"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Изменить</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
@endsection
