<?php

use App\Http\Controllers\backend\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\ForumController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;

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

//backend routes
Route::get('/admin', [HomeController::class,'index'])->name('dashboard');

//forum routes
Route::prefix('admin/forum')->name('forum.')->controller(ForumController::class)->group(function(){
    Route:: get('/','index')->name('index');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{forum}','edit')->name('edit');
    Route:: get('/show/{forum}','show')->name('show');
    Route:: post('/update/{forum}','update')->name('update');
    Route:: delete('/delete/{forum}','delete')->name('delete');

});
//topic route
Route::prefix('admin/topic')->name('topic.')->controller(TopicController::class)->group(function(){
    Route:: get('/','index')->name('index');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{topic}','edit')->name('edit');
    Route:: get('/show/{topic}','show')->name('show');
    Route:: post('/update/{topic}','update')->name('update');
    Route:: delete('/delete/{topic}','delete')->name('delete');

});
//post route
Route::prefix('admin/post')->name('post.')->controller(PostController::class)->group(function(){
    Route:: get('/','index')->name('index');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{post}','edit')->name('edit');
    Route:: get('/show/{post}','show')->name('show');
    Route:: post('/update/{post}','update')->name('update');
    Route:: delete('/delete/{post}','delete')->name('delete');

});
//comment route
Route::prefix('admin/comment')->name('comment.')->controller(CommentController::class)->group(function(){
    Route:: get('/','index')->name('index');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{comment}','edit')->name('edit');
    Route:: get('/show/{comment}','show')->name('show');
    Route:: post('/update/{comment}','update')->name('update');
    Route:: delete('/delete/{comment}','delete')->name('delete');

});