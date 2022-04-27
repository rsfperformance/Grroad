<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('technics', function (){
    $arr = [];
    $arr1 = [
        'technics_name'=>'VOGELE 1900-3',
        'title' => \App\Models\Word::find(177)->ru,
        'photo' => '/img/technics/2.webp',
        'description1' => \App\Models\Word::find(247)->ru,
        'description2' => \App\Models\Word::find(173)->ru,
        'description3' => \App\Models\Word::find(248)->ru,
        'description4' => \App\Models\Word::find(250)->ru,
        'description5' => \App\Models\Word::find(249)->ru,
    ];
    $arr2 = [
        'technics_name'=>'VOGELE SUPER 800',
        'title' => \App\Models\Word::find(177)->ru,
        'photo' => '/img/technics/3.webp',
        'description1' => \App\Models\Word::find(255)->ru,
        'description2' => \App\Models\Word::find(254)->ru,
        'description3' => \App\Models\Word::find(253)->ru,
        'description4' => \App\Models\Word::find(252)->ru,
        'description5' => \App\Models\Word::find(251)->ru,
    ];
    $arr3 = [
        'technics_name'=>'HD+ 140 VV',
        'title' => \App\Models\Word::find(256)->ru,
        'photo' => '/img/technics/4.webp',
        'description1' => \App\Models\Word::find(257)->ru,
        'description2' => \App\Models\Word::find(259)->ru,
        'description3' => \App\Models\Word::find(258)->ru,
        'description4' => \App\Models\Word::find(188)->ru,
        'description5' => \App\Models\Word::find(261)->ru,
    ];
    $arr4 = [
        'technics_name'=>'HAMM 3516',
        'title' => \App\Models\Word::find(178)->ru,
        'photo' => '/img/technics/5.webp',
        'description1' => \App\Models\Word::find(259)->ru,
        'description2' => \App\Models\Word::find(180)->ru,
        'description3' => \App\Models\Word::find(181)->ru,
        'description4' => \App\Models\Word::find(258)->ru,
        'description5' => \App\Models\Word::find(183)->ru,
    ];
    $arr5 = [
        'technics_name'=>'HAMM GRW280-10',
        'title' => \App\Models\Word::find(184)->ru,
        'photo' => '/img/technics/6.webp',
        'description1' => \App\Models\Word::find(259)->ru,
        'description2' => \App\Models\Word::find(186)->ru,
        'description3' => \App\Models\Word::find(187)->ru,
        'description4' => \App\Models\Word::find(188)->ru,
        'description5' => \App\Models\Word::find(189)->ru,
    ];
    $arr6 = [
        'technics_name'=>'WIRTGEN W200',
        'title' => \App\Models\Word::find(190)->ru,
        'photo' => '/img/technics/7.webp',
        'description1' => \App\Models\Word::find(191)->ru,
        'description2' => \App\Models\Word::find(192)->ru,
        'description3' => \App\Models\Word::find(193)->ru,
        'description4' => \App\Models\Word::find(194)->ru,
        'description5' => \App\Models\Word::find(195)->ru,
    ];
    $arr7 = [
        'technics_name'=>'POWER CURBERS',
        'title' => \App\Models\Word::find(262)->ru,
        'photo' => '/img/technics/8.webp',
        'description1' => \App\Models\Word::find(264)->ru,
        'description2' => \App\Models\Word::find(263)->ru,
    ];
    $arr8 = [
        'technics_name'=>'ALTEKMA',
        'title' => \App\Models\Word::find(265)->ru,
        'photo' => '/img/technics/9.webp',
        'description1' => \App\Models\Word::find(266)->ru,
        'description2' => \App\Models\Word::find(267)->ru,
        'description3' => \App\Models\Word::find(268)->ru,
    ];
    $arr = [
        'VOGELE 1900-3' => $arr1,
        'VOGELE SUPER 800' => $arr2,
        'HD+ 140 VV' => $arr3,
        'HAMM 3516' => $arr4,
        'HAMM GRW280-10' => $arr5,
        'WIRTGEN W200' => $arr6,
        'POWER CURBERS' => $arr7,
        'ALTEKMA' => $arr8,
    ];
    return $arr;
});

Route::get('asphalt', function (){
    $arr = [];
    $arr1 =[
        'photo' => '/img/asphalt/1.webp',
        'title' => \App\Models\Word::find(74)->ru,
        'description' => \App\Models\Word::find(75)->ru,
    ];
    $arr2 =[
        'photo' => '/img/asphalt/3.webp',
        'title' => \App\Models\Word::find(76)->ru,
        'description' => \App\Models\Word::find(77)->ru,
    ];
    $arr3 =[
        'photo' => '/img/asphalt/4.webp',
        'title' => \App\Models\Word::find(78)->ru,
        'description' => \App\Models\Word::find(79)->ru,
    ];
    $arr4 =[
        'photo' => '/img/asphalt/5.webp',
        'title' => \App\Models\Word::find(80)->ru,
        'description' => \App\Models\Word::find(81)->ru,
    ];
    $arr = [
        'Технология OKUR' => $arr1,
        'Финишная отделка' => $arr2,
        'Разметка горячая термопластиком' => $arr3,
        'Инновационные технологии ирригационной системы' => $arr4,
    ];
    return $arr;
});

Route::get('lab', function (){
   return \App\Models\Equipment::all();
});

Route::get('projects', function (){
   return \App\Models\Project::all();
});

Route::get('production', function (){
   $production = [];
   $production = [
       'photo' => '/img/bg/bg-production.webp',
       'workers' => \App\Models\Production::find(1)->workers,
       'territory' => \App\Models\Production::find(1)->territory,
       'years' => \App\Models\Production::find(1)->years,
   ];
   return $production;
});

Route::get('reports', function (){
    return \App\Models\Report::all();
});

Route::get('workwith', function (){
    $arr = [];
    $arr1 = [
        'photo' => '/img/production/4.webp',
        'header' => \App\Models\Workwith::find(1)->header1_ru,
        'description' => \App\Models\Workwith::find(1)->description1_ru,
    ];
    $arr2 = [
        'photo' => '/img/production/5.webp',
        'header' => \App\Models\Workwith::find(1)->header2_ru,
        'description' => \App\Models\Workwith::find(1)->description2_ru,
    ];
    $arr3 = [
        'photo' => '/img/production/6.webp',
        'header' => \App\Models\Workwith::find(1)->header3_ru,
        'description' => \App\Models\Workwith::find(1)->description3_ru,
    ];
    $arr = [
        'B2C' => $arr1,
        'B2B' => $arr2,
        'B2G' => $arr3,
    ];
    return $arr;
});

Route::get('partners', function (){
    return \App\Models\Partners::all();
});

Route::get('feedback', function (){
    return \App\Models\Feedback::all();
});

Route::get('materials/inert', function (){
    return \App\Models\Materials::where('class', 1)->get();
});
Route::get('materials/asphalt', function (){
    return \App\Models\Materials::where('class', 2)->get();
});


