<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContentApi;
use App\Http\Controllers\Api\WebinarsApi;
use App\Http\Controllers\PictureApi;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('food', [FoodController::class, 'all']);

// Route::get('category', [CategoryController::class, 'index']);
Route::resource('category', CategoryController::class);
Route::get('categories', [ContentApi::class, 'categories']);
Route::get('tags', [ContentApi::class, 'tags']);
Route::get('content', [ContentApi::class, 'all']);
Route::get('popular', [ContentApi::class, 'popular']);
Route::get('webinar', [WebinarsApi::class, 'all']);
Route::get('image/{filename}', [PictureApi::class, 'image']);
Route::get('video/{filename}', [PictureApi::class, 'video']);
