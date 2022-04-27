@extends('admin.full')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4>Обратный звонок</h4>
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
                        @foreach($feedback as $data)
                            <tr>
                                <th scope="row">{{ $k }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $data->id }}"><i class="bx bxs-trash"></i></button>
                                </td>
                                <div class="modal fade bs-example-modal-center{{ $data->id }}" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Удалить?</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Вы действительно хотите удалить?</p>
                                                <div style="text-align: center">
                                                    <form action="/feedback/{{ $data->id }}" method="post" enctype="multipart/form-data">
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
