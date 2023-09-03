<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Public routes
// Route::resource('bookmarks', BookmarkController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/bookmarks', [BookmarkController::class, 'index']);
Route::get('/bookmarks/{id}', [BookmarkController::class, 'show']);
Route::get('/bookmarks/search/{title}', [BookmarkController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
  Route::post('/bookmarks', [BookmarkController::class, 'store']);
  Route::put('/bookmarks/{id}', [BookmarkController::class, 'update']);
  Route::delete('/bookmarks/{id}', [BookmarkController::class, 'destroy']);

  Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user(); 
});
