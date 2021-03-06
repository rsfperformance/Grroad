<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="Novas"/>
    <meta name="author" content="Novas"/>
    <meta name="google-site-verification" content=""/>
    <!--=======css Links======-->
    <!--    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">-->
    <!--    <link rel="icon" type="image/ico" sizes="16x16" href="img/favicon/favicon.ico">-->
    <!--    <link rel="manifest" href="img/favicon/site.webmanifest">-->

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery.fullPage.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/fancybox.css">
    @livewireStyles
    <!--=======css Links======-->
    @yield('style')
</head>
<body>
@include('layouts.header')
@yield('content')

{{--begin preloader--}}
<div class="preloader">
    <svg width="286" height="116" viewBox="0 0 286 116" fill="none" xmlns="http://www.w3.org/2000/svg"
         class="preloader__logo">
        <g clip-path="url(#clip0_337_834)">
            <path
                d="M110.817 35.1459C108.033 35.1459 106.62 33.7709 106.62 31.3849V22.1643C106.62 19.7781 108.033 18.4031 110.817 18.4031C113.522 18.4031 114.974 19.6566 114.974 21.9222H121.956C121.956 18.807 120.946 16.3809 118.889 14.6428C116.87 12.903 114.247 12.0136 110.979 12.0136C103.756 12.0136 99.678 15.6122 99.678 22.0428V31.7082C99.678 37.8157 103.633 41.5359 110.131 41.5359C112.876 41.5359 115.579 40.4022 116.91 38.6639L118.282 40.9286H121.955V25.1967H110.777V30.9395H115.216V33.0025C113.964 34.4185 112.472 35.1461 110.817 35.1461L110.817 35.1459ZM23.9737 99.0128H57.8762L81.8483 74.9877L73.3723 66.4942L57.8749 82.0237H23.9728L8.47651 66.4942L0 74.9877L23.9737 99.0128ZM16.953 57.9991L23.9728 65.0369H57.8749L64.8955 58L57.8749 50.9641H23.9728L16.953 57.9991V57.9991ZM73.3723 66.4944L81.8488 57.9991L73.3713 49.5065L64.8955 58L73.3723 66.4944ZM8.47651 66.4944L16.953 57.9991L8.47558 49.5065L0 58L8.47651 66.4944V66.4944ZM0 41.0128L8.47558 49.5065L23.9728 33.9759H57.8749L73.3727 49.5065L81.8488 41.0128L57.8762 16.9879H23.9737L0 41.0128H0ZM23.9737 0H57.8762L81.8488 24.0251V91.9745L57.8762 116H23.9737L0 91.9745V24.0251L23.9737 0ZM278.453 109.387V87.1446H286V81.0772H263.925V87.1446H271.513V109.387H278.453H278.453ZM246.224 109.387V94.0597L255.505 109.387H261.841V81.0772H255.101V96.4044L245.861 81.0772H239.485V109.387H246.224V109.387ZM236.92 109.387V103.321H224.893V98.0626H234.983V92.3207H224.893V87.1446H236.838V81.0772H217.954V109.387H236.92H236.92ZM200.545 109.387V98.265H203.168L209.464 109.387H216.04V107.123L208.737 94.8277L215.436 83.3834V81.0772H209.302L203.047 92.1983H200.545V81.0772H193.604V109.387H200.545V109.387ZM174.896 109.387V98.265H183.371V109.387H190.312V81.0772H183.371V92.1983H174.896V81.0772H167.956V109.387H174.896V109.387ZM155.039 109.993C162.344 109.993 166.136 106.474 166.136 101.015C166.136 98.629 165.491 96.9299 164.038 95.7582C162.625 94.5038 161.213 93.8167 158.67 92.9671L154.19 91.4308C152.052 90.6628 151.326 90.299 151.326 89.0446C151.326 87.6297 152.577 86.8608 154.715 86.8608C157.137 86.8608 158.873 88.0336 158.873 90.1775H165.854C165.854 87.0236 164.845 84.6371 162.867 82.979C160.89 81.3209 158.307 80.4713 155.039 80.4713C151.689 80.4713 149.066 81.2798 147.129 82.8981C145.232 84.5149 144.264 86.7001 144.264 89.4088C144.264 93.1698 146.322 95.7176 150.398 97.1328L154.998 98.6701C158.105 99.6803 159.155 100.206 159.155 101.38C159.155 102.876 157.944 103.604 155.562 103.604C154.231 103.604 153.02 103.361 152.011 102.876C151.003 102.35 150.478 101.46 150.478 100.206H143.537C143.537 103.321 144.627 105.747 146.766 107.446C148.945 109.144 151.689 109.994 155.039 109.994L155.039 109.993ZM143.682 109.387V107.123L134.28 81.0772H127.46L118.097 107.123V109.387H124.231L126.249 103.279H135.208L137.185 109.387H143.682ZM133.27 97.4562H128.186L130.768 89.7323L133.27 97.4562V97.4562ZM114.307 109.387V87.1446H121.854V81.0772H99.7789V87.1446H107.366V109.387H114.307H114.307ZM179.303 52.5997H182.813C185.719 52.5997 187.334 54.2163 187.334 56.037V65.3383C187.334 67.1166 185.719 68.7763 182.813 68.7763H179.303V52.5997ZM182.813 74.8414C190.037 74.8414 194.274 71.3633 194.274 65.176V56.1997C194.274 50.0514 189.957 46.5325 182.813 46.5325H172.362V74.8416H182.813V74.8414ZM171.497 74.8414V72.5776L162.095 46.5323H155.277L145.913 72.5776V74.8414H152.047L154.066 68.7348H163.024L165 74.8414H171.497V74.8414ZM161.087 62.9122H156.001L158.584 55.1865L161.087 62.9122ZM139.109 65.4591C139.109 67.3596 137.616 69.0587 134.589 69.0587C131.563 69.0587 130.069 67.3593 130.069 65.4591V55.8744C130.069 54.0547 131.563 52.3159 134.589 52.3159C137.616 52.3159 139.109 54.0547 139.109 55.8744V65.4591ZM134.589 75.4482C138.1 75.4482 140.884 74.5588 142.943 72.7379C145.001 70.919 146.049 68.4113 146.049 65.2164V56.2382C146.049 53.0034 145.001 50.4954 142.943 48.6759C140.884 46.8562 138.1 45.9262 134.589 45.9262C131.078 45.9262 128.254 46.8562 126.196 48.6759C124.137 50.4957 123.128 53.0036 123.128 56.2382V65.2164C123.128 68.4113 124.178 70.919 126.236 72.7379C128.294 74.5588 131.079 75.4482 134.589 75.4482ZM106.559 74.8412V64.4885H109.465L115.276 74.8412H122.016V72.5774L116.809 63.7199C119.674 61.9808 121.128 59.2714 121.128 55.5104C121.128 49.8093 117.98 46.5323 112.007 46.5323H99.6185V74.8414H106.559V74.8412ZM106.559 52.5995H110.837C113.057 52.5995 114.106 53.3663 114.106 55.6319C114.106 57.9365 113.057 58.745 110.837 58.745H106.559V52.5995ZM210.464 18.6859H213.975C216.881 18.6859 218.495 20.3035 218.495 22.1242V31.4246C218.495 33.2035 216.881 34.8628 213.975 34.8628H210.464V18.6859V18.6859ZM213.975 40.9284C221.199 40.9284 225.437 37.4503 225.437 31.2632V22.2851C225.437 16.1377 221.118 12.6197 213.975 12.6197H203.523V40.9286H213.975V40.9284ZM183.573 40.9284V25.6004L192.854 40.9284H199.19V12.6195H192.45V27.9474L183.209 12.6195H176.833V40.9284H183.573ZM175.074 40.9284V38.6637L165.671 12.6195H158.852L149.489 38.6637V40.9284H155.623L157.641 34.8218H166.6L168.576 40.9284H175.074V40.9284ZM164.662 28.9985H159.577L162.16 21.2736L164.662 28.9985ZM132.351 40.9284V30.5759H135.256L141.067 40.9284H147.806V38.6637L142.6 29.8073C145.466 28.0682 146.919 25.3588 146.919 21.5978C146.919 15.8949 143.772 12.6197 137.799 12.6197H125.41V40.9286H132.351V40.9284ZM132.351 18.6859H136.628C138.848 18.6859 139.897 19.4537 139.897 21.7193C139.897 24.0239 138.848 24.8324 136.628 24.8324H132.351V18.6862V18.6859Z"
                fill="black"></path>
        </g>
        <defs>
            <clipPath id="clip0_337_834">
                <rect width="286" height="116" fill="white"></rect>
            </clipPath>
        </defs>
    </svg>
    <div class="preloader-road">
        <svg viewBox="0 0 1920 5" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="60" height="5" fill="white"></rect>
            <rect x="100" width="60" height="5" fill="white"></rect>
            <rect x="200" width="60" height="5" fill="white"></rect>
            <rect x="300" width="60" height="5" fill="white"></rect>
            <rect x="400" width="60" height="5" fill="white"></rect>
            <rect x="500" width="60" height="5" fill="white"></rect>
            <rect x="600" width="60" height="5" fill="white"></rect>
            <rect x="700" width="60" height="5" fill="white"></rect>
            <rect x="800" width="60" height="5" fill="white"></rect>
            <rect x="900" width="60" height="5" fill="white"></rect>
            <rect x="1000" width="60" height="5" fill="white"></rect>
            <rect x="1100" width="60" height="5" fill="white"></rect>
            <rect x="1200" width="60" height="5" fill="white"></rect>
            <rect x="1300" width="60" height="5" fill="white"></rect>
            <rect x="1400" width="60" height="5" fill="white"></rect>
            <rect x="1500" width="60" height="5" fill="white"></rect>
            <rect x="1600" width="60" height="5" fill="white"></rect>
            <rect x="1700" width="60" height="5" fill="white"></rect>
            <rect x="1800" width="60" height="5" fill="white"></rect>
            <rect x="1800" width="60" height="5" fill="white"></rect>
            <rect x="1900" width="20" height="5" fill="white"></rect>
        </svg>
        <img src="/img/track.png" alt="track"></div>
</div>
{{--end preloader--}}
{{--begin popup feedback--}}
@livewire('feedcall')
{{--end popup feedback--}}

{{--begin popup calc--}}
@livewire('service')
{{--end popup calc--}}

<!--Begin scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
<script src="/js/jquery-3.5.1.min.js"></script>
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="/js/fullpage.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/fancybox.umd.js"></script>
<script src="/js/main.js"></script>
@livewireScripts
@yield('script')
@stack('script')
<!--End scripts-->
</body>
</html>
