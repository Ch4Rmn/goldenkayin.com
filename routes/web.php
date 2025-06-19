<?php

use App\Models\Fmenu;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;

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
    $posts = Post::latest()->take(6)->get();
    return view('pages.index', compact('posts'));
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/fmenu', function () {
    $fmenus = Fmenu::latest()->paginate(8); // Assuming you have a Fmenu model
    return view('pages.fmenu', compact('fmenus'));
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



Route::get('/destination', [DestinationController::class, 'index'])->name('pages.destination');
Route::get('/image', [ImageController::class, 'index'])->name('pages.gallery');

Route::get('/blog-detail', function () {
    return view('pages.blog-detail');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
