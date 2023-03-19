<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\ForumController;

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
    return view('welcome');
});


Route::get('/admin', [HomeController::class,'index'])->name('dashboard');


Route::prefix('admin/forum')->name('forum.')->controller(ForumController::class)->group(function(){
    Route:: get('/','index')->name('index');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{forum}','edit')->name('edit');
    Route:: get('/show/{forum}','show')->name('show');
    Route:: post('/update/{forum}','update')->name('update');
    Route:: delete('/delete/{forum}','delete')->name('delete');

});