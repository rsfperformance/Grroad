@extends('admin.full')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Словарь</h4>
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <form action="/words" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="form-label">Ключевое слово</label>
                                                <div>
                                                    <input name="key" type="text"
                                                           class="form-control"
                                                           data-parsley-minlength="6" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">RU</label>
                                                <div>
                                                    <input name="ru" id="" cols="30" rows="3" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">UZ</label>
                                                <div>
                                                    <input name="uz" id="" cols="30" rows="3" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">EN</label>
                                                <div>
                                                    <input name="en" id="" cols="30" rows="3" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 25px">
                                                <div>
                                                    <button class="btn btn-success" type="submit">Сохранить</button>
                                                </div>
                                            </div>
                                        </div>&nbsp;
                                    </form>
                                    @foreach(\App\Models\Word::orderBy('id', 'desc')->get() as $data)
                                        <form action="/words/{{ $data->id }}" method="post">
                                            @csrf
                                            {{ method_field('put') }}
                                            <div class="row">
                                                <div class="col-md-2">
                                                    {{ $data->id }}<div>
                                                        @if(strlen($data->key) < 35)
                                                            <input name="key" type="text" class="form-control" data-parsley-minlength="6" placeholder="" value="{{ $data->key }}">
                                                        @else
                                                            <textarea name="key" class="form-control">{{ $data->key }}</textarea>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        @if(strlen($data->ru) < 35)
                                                            <input name="ru" id="" cols="30" rows="3" class="form-control" value="{{ $data->ru }}">
                                                        @else
                                                            <textarea name="ru" class="form-control">{{ $data->ru }}</textarea>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        @if(strlen($data->ru) < 35)
                                                            <input name="uz" id="" cols="30" rows="3" class="form-control" value="{{ $data->uz }}">
                                                        @else
                                                            <textarea name="uz" class="form-control">{{ $data->uz }}</textarea>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        @if(strlen($data->ru) < 35)
                                                            <input name="en" id="" cols="30" rows="3" class="form-control" value="{{ $data->en }}">
                                                        @else
                                                            <textarea name="en" class="form-control">{{ $data->en }}</textarea>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div>
                                                        <button class="btn btn-warning" type="submit">Изменить</button>
                                                    </div>
                                                </div>
                                            </div>&nbsp;
                                        </form>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
        </div> <!-- end col -->
    </div>
@endsection
