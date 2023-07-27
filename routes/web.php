<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkoutPlannerController;
use App\Models\Post;

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

Route::get('/',[HomeController::class,'index']);

Route::post('/upload_post',[HomeController::class,'upload']);

Route::get('/calculate', function () {
    return view('calculate');
});

Route::get('/recipes', function () {
    $post=Post::all();
    return view('recipes',compact('post'));
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/workout-planner', function () {
    return view('workout-planner');
});

Route::post('/workout-planner', [WorkoutPlannerController::class, 'store'])->name('workout-planner');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/welcome', function () {
        return view('dashboard');
    })->name('dashboard');
});
