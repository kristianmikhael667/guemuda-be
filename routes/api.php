<?php

use App\Http\Controllers\Api\AdsApi;
use App\Http\Controllers\Api\AuthAPI;
use App\Http\Controllers\Api\CategoryCommunity;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CategoryPremiumAPI;
use App\Http\Controllers\Api\CommentAPI;
use App\Http\Controllers\Api\CommentComAPI;
use App\Http\Controllers\Api\CommunityGroupAPI;
use App\Http\Controllers\Api\CommunityNewsApi;
use App\Http\Controllers\Api\CommunityVideoApi;
use App\Http\Controllers\Api\ContentApi;
use App\Http\Controllers\Api\PremiumContentAPI;
use App\Http\Controllers\Api\RegisterUserAPI;
use App\Http\Controllers\Api\SocialAPI;
use App\Http\Controllers\Api\SurveyQuestion as ApiSurveyQuestion;
use App\Http\Controllers\Api\SurveyAnswers as ApiRegisterWebinar;
use App\Http\Controllers\Api\Test;
use App\Http\Controllers\Api\UsersAPI; //sa
use App\Http\Controllers\Api\VideoArticleAPI;
use App\Http\Controllers\Api\WebinarsApi;
use App\Http\Controllers\PictureApi;
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

Route::middleware('auth:sanctum', 'verified')->group(function () {
    Route::get('/user', [Test::class, 'test']);
    Route::post('user/profile', [UsersAPI::class, 'updateProfile']);
    Route::post('user/photo', [UsersAPI::class, 'updatePhoto']);

    Route::post('logout', [AuthAPI::class, 'logout']);
    Route::post('post/comment', [CommentAPI::class, 'store']);
    Route::post('post/reply', [CommentAPI::class, 'reply']);
    Route::get('users', [UsersAPI::class, 'index']);
    Route::get('like', [ContentApi::class, 'likecontent']);
    Route::get('ceklike', [ContentApi::class, 'ceklike']);

    Route::post('post/commentcom', [CommentComAPI::class, 'store']);
    Route::post('post/replycom', [CommentComAPI::class, 'reply']);
    Route::get('likecom', [CommunityNewsApi::class, 'likecontent']);
    Route::get('ceklikecome', [CommunityNewsApi::class, 'ceklike']);
    // Premium Content
    Route::get('categoriespremium', [PremiumContentAPI::class, 'categories']);
    Route::get('premium-content', [PremiumContentAPI::class, 'all']);
    Route::get('today-premium', [PremiumContentAPI::class, 'newstoday']);
    Route::get('popularpremium', [PremiumContentAPI::class, 'popular']);
    Route::get('popularcategorypremium', [PremiumContentAPI::class, 'popular_cat']);
    Route::get('article', [PremiumContentAPI::class, 'article']);
    Route::get('popularnews', [PremiumContentAPI::class, 'popularnews']);

    // Premium Content
    Route::resource('categoryprem', CategoryPremiumAPI::class);
    Route::get('subcategoryprem', [CategoryPremiumAPI::class, 'subcategories']);
    Route::get('category-parent-prem', [CategoryPremiumAPI::class, 'categoryparent']);
});

// Category Content
Route::resource('category', CategoryController::class);
Route::get('subcategory', [CategoryController::class, 'subcategories']);
Route::get('category-parent', [CategoryController::class, 'categoryparent']);

// Category Community
Route::resource('category-community', CategoryCommunity::class);

// Article
Route::get('categories', [ContentApi::class, 'categories']);
Route::get('subcategory', [ContentApi::class, 'subcategory']); //ini
Route::get('content', [ContentApi::class, 'all']);
Route::get('today', [ContentApi::class, 'newstoday']);
Route::get('populararticle', [ContentApi::class, 'popular']);
Route::get('popularcategory', [ContentApi::class, 'popular_category']);
Route::get('article', [ContentApi::class, 'article']);
Route::get('popularnews', [ContentApi::class, 'popularnews']);

Route::get('community-news', [CommunityNewsApi::class, 'all']);
Route::get('popularcommunity', [CommunityNewsApi::class, 'popular']);
Route::get('communities', [CommunityNewsApi::class, 'communities']);
Route::get('categoriescom', [CommunityNewsApi::class, 'categories']);

Route::get('community-video', [CommunityVideoApi::class, 'all']);
Route::get('community-group', [CommunityGroupAPI::class, 'all']);
Route::get('poppular-community-video', [CommunityVideoApi::class, 'popular']);

// Webinar
Route::get('webinar', [WebinarsApi::class, 'all']);
Route::get('video-article', [VideoArticleAPI::class, 'all']);
Route::get('popularvideoarticle', [VideoArticleAPI::class, 'popular']);
Route::get('image/{filename}', [PictureApi::class, 'image']);
Route::get('imageuser/{filename}', [PictureApi::class, 'imageuser']);
Route::get('video/{filename}', [PictureApi::class, 'video']);
Route::get('webinarsurveyquestion', [ApiSurveyQuestion::class, 'index']);
Route::get('webinarsurveyquestion/{id}', [ApiSurveyQuestion::class, 'question']);
Route::get('register-webinar-answer', [ApiRegisterWebinar::class, 'index']);
Route::post('register-webinar-answer', [ApiRegisterWebinar::class, 'registerWebinar']);

// Tags
Route::get('tags', [ContentApi::class, 'tags']);
Route::get('tagscommunity', [CommunityGroupAPI::class, 'tagscommunity']);
Route::get('tagswebinar', [WebinarsApi::class, 'tagswebinar']);

// Get Banner
Route::get('getads', [AdsApi::class, 'getads']);

// User Service
Route::post('login', [AuthAPI::class, 'login']);
Route::post('register', [AuthAPI::class, 'register']);
Route::post('email/verification-notification', [RegisterUserAPI::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [RegisterUserAPI::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');
Route::get('auth/google', [SocialAPI::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialAPI::class, 'handleGoogleCallback']);
