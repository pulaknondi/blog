<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PostController::class, 'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user/post', [PostController::class,'CreatePost'])->name('user.post');
Route::post('/post/submit/{uid}', [PostController::class,'StorePost'])->name('user.post.submit');
Route::get('/post/edit/{id}', [PostController::class,'EditPost'])->name('user.post.edit.page');
Route::post('/post/update/{id}', [PostController::class,'UpdatePost'])->name('user.post.update');
Route::get('/post/view', [PostController::class,'ViewPost'])->name('user.view.post');
Route::get('/user/category', [CategoryController::class,'Viewcatpage'])->name('user.category');
Route::post('/post/category', [CategoryController::class,'StoreCat'])->name('user.category.post');
Route::get('/edit/category', [CategoryController::class,'EditCat'])->name('user.category.edit');
Route::post('/update/category/{id}', [CategoryController::class, 'UpdateCat'])->name('user.category.update');
Route::get('/edit/category/{id}', [CategoryController::class,'EditCatView'])->name('user.category.edit.page');
Route::get('/delete/category/{id}', [CategoryController::class,'DeleteCat'])->name('user.category.delate');

