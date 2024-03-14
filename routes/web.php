<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
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

Route::get('/',[TodoController::class, 'index'])->name('todos.index');
Route::get('/create',[TodoController::class, 'Create'])->name('todos.create');
// Route::get('/create',function(){
//     return view('Todos.Create');
// });
Route::post('/store',[TodoController::class, 'store'])->name('todos.store');
// Route::post('/update',[TodoController::class, 'update'])->name('todos.update');
Route::get('/edit',[TodoController::class, 'edit'])->name('todos.edit');
Route::put('/update/{id}', [TodoController::class, 'update'])->name('todos.update');
Route::put('/StatusUpdate/{id}', [TodoController::class, 'StatusUpdate'])->name('todos.StatusUpdate');
Route::delete('/todos/{id}', [TodoController::class ,'destroy'])->name('todos.destroy');