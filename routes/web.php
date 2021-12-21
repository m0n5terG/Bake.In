<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

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
// Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

Route::get('/', [PagesController::class, 'index']);
Route::get('/pricing', [PagesController::class, 'pricing']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::resource('/blog', PostsController::class);
// Route::resource('{post_id}/comments', CommentsController::class);
Route::post('comment/{post_id}', [App\Http\Controllers\CommentsController::class, 'store'])->name('comments.add');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
