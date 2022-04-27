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
                    <h4 class="card-title">С кем мы работаем</h4>
                    <!-- Nav tabs -->
                    <form action="/workwith/{{ $data->id }}" method="post" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            @for($i=1; $i<=3; $i++)
                                <li class="nav-item">
                                    <a class="nav-link @if($i==1) active @endif" data-bs-toggle="tab"
                                       href="#home{{ $i }}" role="tab" aria-selected="false">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block"
                                              style="text-transform: uppercase">{{ $arr[$i] }}</span>
                                    </a>
                                </li>
                            @endfor
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            @for($i=1; $i<=3; $i++)
                                <div class="tab-pane @if($i==1) active @endif" id="home{{ $i }}" role="tabpanel">
                                    <div class="col-xl-12">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label">1.Заголовок</label>
                                                    <div>
                                                        <?php $header1 = 'header1_'.$arr[$i] ?>
                                                        <?php $header2 = 'header2_'.$arr[$i] ?>
                                                        <?php $header3 = 'header3_'.$arr[$i] ?>

                                                        <?php $description1 = 'description1_'.$arr[$i] ?>
                                                        <?php $description2 = 'description2_'.$arr[$i] ?>
                                                        <?php $description3 = 'description3_'.$arr[$i] ?>

                                                        <input name="header1_{{ $arr[$i] }}" type="text"
                                                               class="form-control" placeholder="" value="{{ $data->$header1 }}">
                                                    </div>&nbsp;
                                                    <div>
                                                        <label class="form-label">Описание</label>
                                                        <textarea name="description1_{{ $arr[$i] }}" type="text"
                                                               class="form-control" placeholder="">{{ $data->$description1 }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">2.Заголовок</label>
                                                    <div>
                                                        <input name="header2_{{ $arr[$i] }}" id="" cols="30" rows="3" class="form-control" value="{{ $data->$header2 }}">
                                                    </div>&nbsp;
                                                    <div>
                                                        <label class="form-label">Описание</label>
                                                        <textarea name="description2_{{ $arr[$i] }}" type="text"
                                                                  class="form-control" placeholder="">{{ $data->$description2 }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">3.Заголовок</label>
                                                    <div>
                                                        <input name="header3_{{ $arr[$i] }}" id="" cols="30" rows="3" class="form-control" value="{{ $data->$header3 }}">
                                                    </div>&nbsp;
                                                    <div>
                                                        <label class="form-label">Описание</label>
                                                        <textarea name="description3_{{ $arr[$i] }}" type="text"
                                                                  class="form-control" placeholder="">{{ $data->$description3 }}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <div class="col-md-12" style="text-align: center">
                                <button class="btn btn-success">Изменить</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end card -->
            </div>
        </div> <!-- end col -->
    </div>
@endsection
