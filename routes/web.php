<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);

Route::post('/addtodo', [TodoController::class, 'store']);

Route::get('/edit/{id}', [TodoController::class, 'edit']);

Route::post('/updatetodo/{id}', [TodoController::class, 'updateTask']);

Route::patch('/todotoggle/{todo}', [TodoController::class, 'update']);

Route::delete('/tododelete/{todo}', [TodoController::class, 'destroy']);