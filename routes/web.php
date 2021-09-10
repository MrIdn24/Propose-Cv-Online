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
Route::get('/about', [CreateController::class, 'about'])->name('about');
// Route::get('/template-flat', function () {
//     return view('template.templateflat');
// });
// Route::get('/template', [HomeController::class, 'checkout'])->name('checkout');

// Route::get('/template-flat', [CreateController::class, 'template']);

Route::prefix('/')->group(function () {
    Route::get('/datadiri', [CreateController::class, 'createdata'])->name('datadiri');
    Route::get('/pengalaman', [CreateController::class, 'createpengalam'])->name('pengalaman');
    Route::get('/template', [CreateController::class, 'pilihtemplate'])->name('choose-tmp');
    Route::get('/checkout', [CreateController::class, 'createcheck'])->name('checkout');
    Route::get('/checkout/preview', [CreateController::class, 'totemplate'])->name('template');
    Route::post('/template/store', [CreateController::class, 'storetmp'])->name('choose-tmp.store');
    Route::post('/datadiri/store', [CreateController::class, 'storedata'])->name('create.storedata');
    Route::post('/pengalaman/store', [CreateController::class, 'storepengalam'])->name('create.storepengalam');
    Route::post('/checkout/store', [CreateController::class, 'storecheck'])->name('create.storecheck');
    Route::get('/template-baru', [CreateController::class, 'template_baru'])->name('template-baru');
    Route::get('/template-flat', [CreateController::class, 'template_flat'])->name('template-flat');
    Route::get('/template-3', [CreateController::class, 'template_3'])->name('template-3');
    Route::get('/template-4', [CreateController::class, 'template_4'])->name('template-4');
    Route::get('/template-5', [CreateController::class, 'template_5'])->name('template-5');
    Route::get('/pdf', [CreateController::class, 'printPDF']);
    Route::get('/choose-template', [CreateController::class, 'chose_template'])->name('chose-template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
