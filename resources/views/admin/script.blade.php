@livewireScripts
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>
<script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

<!-- apexcharts -->
<script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="/assets/js/app.js"></script>

<!-- parsleyjs -->
<script src="/assets/libs/parsleyjs/parsley.min.js"></script>

<script src="/assets/js/pages/form-validation.init.js"></script>


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<?php
$arr = [
    1 => 'ru',
    2 => 'uz',
    3 => 'en'
];
?>


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@for($i=1; $i<=3; $i++)
<script>
    CKEDITOR.replace( 'ckeditor{{ $arr[$i] }}');
</script>
@endfor

@for($i=1; $i<=3; $i++)
    <script>
        CKEDITOR.replace( 'description1_{{ $arr[$i] }}');
    </script>
@endfor
@for($i=1; $i<=3; $i++)
    <script>
        CKEDITOR.replace( 'description2_{{ $arr[$i] }}');
    </script>
@endfor
@for($i=1; $i<=3; $i++)
    <script>
        CKEDITOR.replace( 'description3_{{ $arr[$i] }}');
    </script>
@endfor


@foreach(\App\Models\Report::all() as $data)
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'ckeditor{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor

    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description1_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description2_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description3_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
@endforeach

@foreach(\App\Models\Materials::all() as $data)
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'ckeditor{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor

    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description1_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description2_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description3_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
@endforeach

@foreach(\App\Models\Service::all() as $data)
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'ckeditor{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor

    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description1_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description2_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
    @for($i=1; $i<=3; $i++)
        <script>
            CKEDITOR.replace( 'description3_{{ $arr[$i] }}edit{{ $data->id }}');
        </script>
    @endfor
@endforeach




