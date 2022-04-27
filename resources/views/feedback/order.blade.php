@extends('admin.full')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4>Заказы</h4>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Номер телефона</th>
                            <th>Дата</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $k=1 ?>
                        @foreach($order as $data)
                                <tr>
                                    <th scope="row">{{ $k }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $data->id }}"><i class="uil-eye"></i></button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                    </td>
                                    <div class="modal fade bs-example-modal-lg{{ $data->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Данные</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        {{ method_field('put') }}
                                                        <div class="row">
                                                            <div class="col-md-5" style="margin-left: 3rem">
                                                                <div>
                                                                    <label class="form-label">Имя</label>
                                                                    <input name="header_ru" type="text"
                                                                           class="form-control" placeholder=""
                                                                           value="{{ $data->name }}" readonly>
                                                                </div>
                                                            </div>&nbsp;
                                                            <div class="col-md-5" style="margin: 0">
                                                                <div>
                                                                    <label class="form-label">Номер телефона</label>
                                                                    <input name="description_ru" class="form-control"
                                                                           value="{{ $data->phone }}" readonly>
                                                                </div>
                                                            </div>&nbsp;
                                                        </div>&nbsp;
                                                        <div class="row">
                                                            <div class="col-md-5"  style="margin-left: 3rem">
                                                                <div>
                                                                    <label class="form-label">Тип сервиса</label>
                                                                    <input name="description_ru" class="form-control"
                                                                           value="{{  \App\Models\Category::find(\App\Models\Service::find($data->service)->category_id)->category_ru }}" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div>
                                                                    <label class="form-label">Сервис</label>
                                                                    <input name="header_ru" type="text"
                                                                           class="form-control" placeholder=""
                                                                           value="{{ \App\Models\Service::find($data->service)->service_name_ru }}" readonly>
                                                                </div>
                                                            </div>&nbsp;&nbsp;
                                                        </div>&nbsp;
                                                        <div class="row">
                                                            <div class="col-md-5"  style="margin-left: 3rem">
                                                                <div>
                                                                    <label class="form-label">Подробнее</label>
                                                                    <input name="description_ru" class="form-control"
                                                                         @if($data->price_type == 1)  value="Со снятем старого покрытия" @else value="Без снятия старого покрытия" @endif readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div>
                                                                    <label class="form-label">Цена</label>
                                                                    <input name="header_ru" type="text"
                                                                           class="form-control" placeholder=""
                                                                           @if($data->price_type == 1)  value="{{ \App\Models\Service::find($data->service)->full_price }}" @else value="{{ \App\Models\Service::find($data->service)->price }}" @endif readonly>
                                                                </div>
                                                            </div>&nbsp;&nbsp;
                                                        </div>&nbsp;
                                                        <div class="row">
                                                            <div class="col-md-10" style="margin-left: 3rem">
                                                                <label class="form-label">Сообщение</label>
                                                                <div>
                                                                    <textarea cols="30" rows="3" class="form-control" readonly>{{ $data->message }}</textarea>
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
                                                    <p>Вы действительно хотите удалить?</p>
                                                    <div style="text-align: center">
                                                        <form action="/orders/{{ $data->id }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('delete') }}
                                                            <button class="btn btn-success" style="margin-right: 20px" type="submit">Да</button>
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
@endsection
