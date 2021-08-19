<?php

use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('homepage.content')->name('home');
// });

Route::get('/index', [HomeController::class, 'index'])->name('home');
// Route::get('/template-flat', function () {
//     return view('template.templateflat');
// });
// Route::get('/template', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/template-flat', [CreateController::class, 'template']);

Route::prefix('/')->group(function () {
    Route::get('/datadiri', [CreateController::class, 'createdata'])->name('datadiri');
    Route::get('/pengalaman', [CreateController::class, 'createpengalam'])->name('pengalaman');
    Route::post('/datadiri/store', [CreateController::class, 'storedata'])->name('create.storedata');
    Route::post('/pengalaman/store', [CreateController::class, 'storepengalam'])->name('create.storepengalam');
    Route::get('/template-baru', [CreateController::class, 'template_baru'])->name('checkout');
});
