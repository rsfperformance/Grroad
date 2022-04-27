@extends('admin.full')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Контакты</h4>
                    <form class="needs-validation" action="/contacts/{{ $data->id }}" novalidate="" method="post">
                        @csrf
                        {{ method_field('put') }}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Для экспорта и импорта:</label>
                                    <input type="text" class="form-control" name="link" id="validationCustom01" value="{{ $data->link }}" required="">
                                    <div class="valid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="validationCustom02" value="{{ $data->email }}" required="">
                                    <div class="valid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Телефон 1</label>
                                    <input type="text" class="form-control" name="phone1" id="validationCustom03" value="{{ $data->phone1 }}" required="">
                                    <div class="invalid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Телефон 2</label>
                                    <input type="text" class="form-control" name="phone2" id="validationCustom03" value="{{ $data->phone2 }}" required="">
                                    <div class="invalid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Телеграм:</label>
                                    <input type="text" class="form-control" name="telegram" id="validationCustom01" value="{{ $data->telegram }}" required="">
                                    <div class="valid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">YouTube</label>
                                    <input type="text" class="form-control" name="youtube" id="validationCustom02" value="{{ $data->youtube }}" required="">
                                    <div class="valid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="validationCustom03" value="{{ $data->facebook }}" required="">
                                    <div class="invalid-feedback">
                                        Успешно изменено!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="validationCustom03" value="{{ $data->instagram }}" required="">
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
