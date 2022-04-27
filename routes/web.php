<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (session()->get('locale') == '') {
        session()->put('locale', 'ru');
        app()->setLocale('ru');
    } else {
        app()->setLocale(session()->get('locale'));
    }
    $lan = session()->get('locale');
    return view('welcome', compact('lan'));
});

Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['en', 'ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});

Route::get('/profile/show', function (){
    $footer = 1;
    return view('profile.show', compact('footer'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/materials/asphalt', 'material.data-asphalt');
Route::view('/materials/inert', 'material.data-inert');

Route::delete('/messages/{id}', [\App\Http\Controllers\FeedbackController::class, 'message_destroy']);
Route::delete('/orders/{id}', [\App\Http\Controllers\FeedbackController::class, 'order_destroy']);
Route::delete('/calc_cost/{id}', [\App\Http\Controllers\FeedbackController::class, 'calc_cost_destroy']);

Route::get('/feedback/calculate_cost', [\App\Http\Controllers\FeedbackController::class, 'calculate_cost']);

Route::post('/years', [\App\Http\Controllers\HistoryController::class, 'year']);

Route::resources([
    'production' => \App\Http\Controllers\ProductionController::class,
    'projects' => \App\Http\Controllers\ProjectController::class,
    'reports' => \App\Http\Controllers\ReportController::class,
    'workwith' => \App\Http\Controllers\WorkwithController::class,
    'partners' => \App\Http\Controllers\PartnersController::class,
    'contacts' => \App\Http\Controllers\ContactsController::class,
    'feedback' => \App\Http\Controllers\FeedbackController::class,
    'catalogs' => \App\Http\Controllers\CatalogController::class,
    'equipment' => \App\Http\Controllers\EquipmentController::class,
    'materials' => \App\Http\Controllers\MaterialsController::class,
    'abouts' => \App\Http\Controllers\AboutController::class,
    'history' => \App\Http\Controllers\HistoryController::class,
    'calculator' => \App\Http\Controllers\CalculatorController::class,
    'words' => \App\Http\Controllers\WordController::class
]);


Route::view('/planing', 'planing.index');
Route::view('/lab', 'lab.index');
Route::view('/technics', 'technics.index');
Route::view('/asphalt', 'asphalt.index');

