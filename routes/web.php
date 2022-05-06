<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index');
    Route::get('/add-student', 'create');
    Route::post('/add-student', 'store');
    Route::get('/student/{student_id}/edit', 'edit');
    Route::put('/update-student/{student_id}', 'update');
    Route::delete('/student/{student_id}/delete', 'destroy');
});

require __DIR__.'/auth.php';
