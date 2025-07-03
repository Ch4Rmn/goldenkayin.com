<?php

use App\Models\Fmenu;
use App\Models\ManPower;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManPowerController;
use App\Http\Controllers\DestinationController;
use Illuminate\Http\Request;


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

Route::get('/', function (Request $request) {
    $query = ManPower::query();

    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
                ->orWhere('ref_code', 'like', "%{$search}%")
                ->orWhere('type', 'like', "%{$search}%")
                ->orWhere('nationality', 'like', "%{$search}%");
            // Add more fields as needed
        });
    }

    $manpowers = \App\Models\ManPower::latest()->paginate(6); // Assuming you have a ManPower model
    return view('pages.index', compact('manpowers'));
});

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/fmenu', function () {
    $fmenus = Fmenu::latest()->paginate(8); // Assuming you have a Fmenu model
    return view('pages.fmenu', compact('fmenus'));
})->name('pages.fmenu');

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//

Route::get('/destination', [DestinationController::class, 'index'])->name('pages.destination');

Route::get('/manpower', [ManPowerController::class, 'index'])->name('pages.manpower');
Route::get('/manpower/{manPower}', [ManPowerController::class, 'show'])->name('manpower.show');

Route::get('/destination/{id}', [DestinationController::class, 'show'])->name('pages.destination.show');

//
Route::get('/image', [ImageController::class, 'index'])->name('pages.gallery');

Route::get('/blog-detail', function () {
    return view('pages.blog-detail');
});

Route::get('/temp', function () {
    $manpowers = ManPower::all();
    return view('pages.temp', compact('manpowers'));
})->name('pages.temp');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
