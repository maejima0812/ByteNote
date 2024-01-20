<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MypageController;
use Illuminate\Support\Facades\Route;





Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    
    Route::get('/', 'index')->name('index');
    
    
    Route::get('/search', 'App\Http\Controllers\PostController@search')->name('search');
    
    Route::get('/go_search', 'App\Http\Controllers\PostController@go_search')->name('go_search');
    
    
    Route::get('/posts/store/{storeName}', 'App\Http\Controllers\PostController@store')->name('store');
    
    Route::get('/posts/post', 'App\Http\Controllers\PostController@go_post')->name('go_post');
    Route::post('/posts.post', 'App\Http\Controllers\PostController@post')->name('post');
    
    
    Route::get('/posts/comments/{id}/{name}/{title}/{body}', 'App\Http\Controllers\PostController@comments')->name('posts.comments');
    Route::post('/post/comments/{id}/{name}/{title}/{body}','App\Http\Controllers\PostController@question')->name('posts.question');
    
    Route::get('/posts.look/{id}/{name}/{title}/{body}','App\Http\Controllers\PostController@look')->name('posts.look');
    
    
    Route::get('/mypage', 'App\Http\Controllers\MypageController@mypage')->name('mypage');
    
    Route::get('/mypage.form', 'App\Http\Controllers\MypageController@form')->name('form');
    
     Route::post('/mypage.calculate', 'App\Http\Controllers\MypageController@calculate')->name('calculate');
    Route::get('/mypage.calculate', 'App\Http\Controllers\MypageController@record')->name('record'); 
    
    
    Route::post('/profile/edit', 'App\Http\Controllers\PostController@add')->name('store.add');
    
    
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';