<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// (Protected) routes for the assignments CRUD
Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments.index');
Route::get('/assignments/create', [AssignmentController::class, 'create'])
    ->middleware('auth')->name('assignments.create');
Route::post('/assignments', [AssignmentController::class, 'store'])
    ->middleware('auth')->name('assignments.store');
Route::get('/assignments/{assignment}', [AssignmentController::class, 'show'])->name('assignments.show');
Route::get('/assignments/{assignment}/edit', [AssignmentController::class, 'edit'])
    ->middleware('auth')->name('assignments.edit');
Route::patch('/assignments/{assignment}', [AssignmentController::class, 'update'])
    ->middleware('auth')->name('assignments.update');
Route::delete('/assignments/{assignment}', [AssignmentController::class, 'destroy'])
    ->middleware('auth')->name('assignments.destroy');
Route::get('assignments/{assignment}/delete', [AssignmentController::class,'delete'])
    ->middleware('auth')->name('assignments.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
