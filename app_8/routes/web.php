<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Blade;

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
   return Blade::render('{{$data }} @if ($data) Something @else ok @endif Blade template string', [ 'data' => ' ']);
    // throw new \Exception('Error Processing Request', 1);
    // return view('welcome');
});


Route::get('/posts', [PostController::class, 'index'])->name('home');
Route::get('/posts/create', [PostController::class, 'create'])->name('create');
Route::post('/posts', [PostController::class, 'store'])->name('store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');