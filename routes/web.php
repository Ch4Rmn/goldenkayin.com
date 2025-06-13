<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});



Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// Route::get('/destination', function () {
//     return view('pages.destination');
// });

Route::get('/destination', [DestinationController::class, 'index'])->name('pages.destination');
Route::get('/image', [ImageController::class, 'index'])->name('pages.gallery');

Route::get('/blog-detail', function () {
    return view('pages.blog-detail');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
