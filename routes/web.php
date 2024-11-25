<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'main']);
Route::get('Biz haqimizda',[PageController::class ,'about'])->name('about');
Route::get( '/Xizmatlar',[PageController::class,'services'])->name('services');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/', [PageController::class, 'main'])->name('home');
Route::get('/services-us',[PageController::class,'services'])->name('services');
Route::get('/project',[PageController::class,'project'])->name('project');
Route::get('/contact',[PageController::class,'contact'])->name('contact');




/*Route::get('posts',[PostController::class, 'index'])->name('posts.index ');
Route::get('posts/{post}',[PostController::class, 'show'])->name('posts.show');
Route::get('posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('posts/create',[PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}/edit',[PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}/delete',[PostController::class, 'delete'])->name('posts.delete');
*/

Route::resources([
    'posts'=>PostController::class,
    'comments'=>CommentController::class,
    'users'=>UserController::class,
]);
