<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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

// Route::get('/dashboard', function () {
//     $students = Student::all();
//     return view('dashboard')->with('students', $students);
// })->middleware(['auth'])->name('dashboard');

// resource version using studentcontroller
Route::resource('/dashboard', StudentController::class)->middleware(['auth'])->name('index', 'dashboard');

require __DIR__.'/auth.php';

