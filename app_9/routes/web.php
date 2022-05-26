<?php

use App\Http\Controllers\PostController;
use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str as SupportStr;

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
    //    return string on home page;
    // return 'Hello World laravel 9';
    // return Str::of($string)('Hello World')->Str::upper($value)();
    // return Str::of($string)('Hello World')->Str::upper($value)();
    // return Str::of('Hello World')->upper()->get();
    // throw new \Exception('Error Processing Request', 1);
    return Blade::render('{{$data }} @if ($data) Something @else ok @endif Blade template string', ['data' => ' ']);
    return str('Hello World')->upper();
    return view('welcome');


    
})->name('home1');

Route::get('/about', function () {
    // in laravel 9 we can use the name of the route
    return to_route('home1');
    return redirect()->route('home1');
});

Route::controller(PostController::class)->group(function(){
    Route::get('/posts',  'index')->name('home');
    Route::get('/posts/create',  'create')->name('create');
    Route::post('/posts',  'store')->name('store');
    Route::get('/posts/{post}',  'show')->name('show');
});

// Route::get('/posts', [PostController::class, 'index'])->name('home');
// Route::get('/posts/create', [PostController::class, 'create'])->name('create');
// Route::post('/posts', [PostController::class, 'store'])->name('store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');

