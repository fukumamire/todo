<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;
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

Route::post('/todos', [TodoController::class, 'store']);

Route::patch('/todos/{todo_id}', [TodoController::class, 'update']);

Route::delete('/todos/{todo_id}', [TodoController::class, 'destroy']);
//検索
Route::get('/todos/search',[TodoController::class, 'search']);


// カテゴリー一覧を表示する
Route::get('/categories',[CategoryController::class, 'index']);

//カテゴリ‐ 追加機能
Route::post('/categories',[CategoryController::class, 'store']);

//カテゴリの更新に対応するルート
Route::patch('/categories/{category_id}', [CategoryController::class, 'update']);

//削除
Route::delete('/categories/{category_id}', [CategoryController::class, 'destroy']);