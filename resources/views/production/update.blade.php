@extends('admin.full')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Производство</h4>
                    <form class="needs-validation" action="/production/{{ $data->id }}" novalidate="" method="post">
                        @csrf
                        {{ method_field('put') }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Количество работников</label>
                                    <input type="text" class="form-control" name="workers" id="validationCustom01" value="{{ $data->workers }}" required="">
                                    <div class="valid-feedback">
                                       Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Территория карьера</label>
                                    <input type="text" class="form-control" name="territory" id="validationCustom02" value="{{ $data->territory }}" required="">
                                    <div class="valid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Лет на рынке</label>
                                    <input type="text" class="form-control" name="years" id="validationCustom03" value="{{ $data->years }}" required="">
                                    <div class="invalid-feedback">
                                        Успешно изменено!
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
@endsection
