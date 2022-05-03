<?php

use App\Http\Controllers\Api\AuthAPI;
use App\Http\Controllers\Api\CategoryCommunity;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommunityGroupAPI;
use App\Http\Controllers\Api\CommunityNewsApi;
use App\Http\Controllers\Api\CommunityVideoApi;
use App\Http\Controllers\Api\ContentApi;
use App\Http\Controllers\Api\RegisterUserAPI;
use App\Http\Controllers\Api\VideoArticleAPI;
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
Route::get('subcategory', [CategoryController::class, 'subcategories']);

Route::resource('category-community', CategoryCommunity::class);
Route::get('categories', [ContentApi::class, 'categories']);
Route::get('tags', [ContentApi::class, 'tags']);
Route::get('content', [ContentApi::class, 'all']);
Route::get('community-news', [CommunityNewsApi::class,'all']);
Route::get('popularcommunity', [CommunityNewsApi::class, 'popular']);
Route::get('community-video', [CommunityVideoApi::class, 'all']);
Route::get('community-group', [CommunityGroupAPI::class, 'all']);
Route::get('poppular-community-video', [CommunityVideoApi::class, 'popular']);
Route::get('populararticle', [ContentApi::class, 'popular']);
Route::get('webinar', [WebinarsApi::class, 'all']);
Route::get('video-article', [VideoArticleAPI::class,'all']);
Route::get('popularvideoarticle', [VideoArticleAPI::class, 'popular']);
Route::get('image/{filename}', [PictureApi::class, 'image']);
Route::get('video/{filename}', [PictureApi::class, 'video']);

// User Service
Route::post('register', [AuthAPI::class, 'register']);
Route::post('email/verification-notification', [RegisterUserAPI::class,'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [RegisterUserAPI::class,'verify'])->name('verification.verify')->middleware('auth:sanctum');
