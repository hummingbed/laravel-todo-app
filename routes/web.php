<?php

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

use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodosController::class, 'getAllTodos']);
Route::get('/show/{id}', [TodosController::class, 'getSingleTodo']);
Route::get('/create', [TodosController::class, 'createTodo']);
Route::post('/save-todo', [TodosController::class, 'saveTodo']);
Route::get('/todo/{id}/edit', [TodosController::class, 'editTodo']);
Route::post('todo/{id}/update', [TodosController::class, 'updateTodo']);
Route::get('todo/{id}/delete', [TodosController::class, 'deleteTodo']);

