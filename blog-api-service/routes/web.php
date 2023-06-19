<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\ProvisionSchemaTables;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tenant\BlogPostController;
use App\Http\Controllers\Tenant\CustomerController;

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
    return view('welcome');
});


// Tenant provision schema routes
Route::get('/up', [ProvisionSchemaTables::class, 'up'])->name('migration.up');
Route::get('/down', [ProvisionSchemaTables::class, 'down'])->name('migration.up');
Auth::routes();

Auth::routes();

// Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Post by tenant
// Route::domain('{username}.' . env('APP_URL'))->group(function () {
//     Route::get('/post', [BlogPostController::class, 'index'])->name('post.all');
// });

// Blog Post Routes
Route::get('/post', [BlogPostController::class, 'index'])->name('post.all');
Route::get('/post/create', [BlogPostController::class, 'create'])->name('post.create');
Route::get('/post/edit/{id}', [BlogPostController::class, 'edit'])->name('post.edit');

Route::post('/post', [BlogPostController::class, 'store'])->name('post.store');
Route::post('/post/update', [BlogPostController::class, 'update'])->name('post.update');
Route::get('/post/delete/{id}', [BlogPostController::class, 'destroy'])->name('post.delete');

// Customer Routes
Route::get('/customer', [CustomerController::class, 'index'])->name('all');