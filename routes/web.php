<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return redirect()->route('tasks.index');
});

Route::redirect('/home','/tasks');

Route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');

Route::get('/tasks/{task}',[TaskController::class,'edit'])->name('tasks.edit');
Route::put('/tasks/{task}',[TaskController::class,'update'])->name('tasks.update');

Route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name('tasks.destroy');
Route::post('/tasks/{task}/complete',[TaskController::class,'complete'])->name('tasks.complete');
Route::get('/taskshow',[TaskController::class,'showCompleted'])->name('taskshow');