<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', [AboutController::class, 'afficher'])->name('about.page');
Route::get('/', [IndexController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
},)->name('contact.page');

// Route::get('/teacher', function () {
//     return view('teacher');
// })->name('teachers');

Route::get('/vehicle', function () {
    return view('vehicle');
})->name('vehicle.page');
Route::get('/ToRegister', function () {
    return view('inscrit');
})->name('register.page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('teachers', [TeacherController::class, 'store'])->name('create.teacher');
Route::get('Listteacher', [TeacherController::class, 'index'])->name('teachers1');
Route::get('/', [TeacherController::class, 'afficher']);
Route::get('teacher', [TeacherController::class, 'afficher2'])->name('teachers');
Route::delete('Listteacher/{name}',[TeacherController::class, 'loschen'])->name('loschen.teacher');

Route::get('Liststudent', [StudentController::class, 'index'])->name('student1');
Route::post('inscrit', [StudentController::class, 'store'])->name('create.student');


Route::get('abouts', [AboutController::class, 'index'])->name('abouts');
Route::post('about', [AboutController::class, 'store'])->name('create.about');

// Route::get('contact', [ContactController::class, 'contact']);
Route::post('send-message', [ContactController::class, 'sendEmail'])->name('contact.send');





