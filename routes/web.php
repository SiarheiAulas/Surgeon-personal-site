<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PublsController;
use App\Http\Controllers\ConfsController;
use App\Http\Controllers\BiosController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SearchController;


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
    return redirect()->route('landings.index');
});

Route::resources([
    'posts'=>PostsController::class,
    'reviews'=>ReviewsController::class,
    'publs'=>PublsController::class,
    'confs'=>ConfsController::class,
    'bios'=>BiosController::class,
    'landings'=>LandingController::class
]);

Route::get('/contentmg', function(){
    return view('admin')->with(['ru_title'=>'Панель администратора', 'en_title'=>'Admin panel']);
})->middleware('auth')->name('admin');

Route::get('/feedback', function(){
    return view('feedback', ['ru_title'=>'Обратная связь', 'en_title'=>'Feedback']);
})->name('feedback');

Route::get('/download', [FileController::class, 'download'])->name('download');

Route::get('patent', function(){
    return view('patent')->with(['ru_title'=>'Патент', 'en_title'=>'Patent']);
})->name('patent');

Route::post('/email', [MailController::class, 'send'])->name('email');

Route::get('/{locale}', function($locale){
    session(['locale'=>$locale]);
    return back();
})->name('setlocale');

Route::post('search', [SearchController::class, 'search'])->name('search');

require __DIR__.'/auth.php';
