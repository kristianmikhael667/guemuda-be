<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryArticle;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Analytic;
use App\Http\Controllers\Admin\CategoryCommunity;
use App\Http\Controllers\Admin\CategoryWebinarController;
use App\Http\Controllers\Admin\CatPremiumController;
use App\Http\Controllers\Admin\CommunityGroupController;
use App\Http\Controllers\Admin\CommunityNews;
use App\Http\Controllers\Admin\CommunityVideoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagsCommunity;
use App\Http\Controllers\Admin\TagsWebinarsControllers;
use App\Http\Controllers\Admin\VideoArticleController;
use App\Http\Controllers\Admin\WebinarsControllers;
use App\Http\Controllers\Admin\RegisterWebinarResult;
use App\Http\Controllers\Admin\PremiumContentController;
use App\Http\Controllers\Api\SocialAPI;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Route::get('auth/google', [SocialAPI::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialAPI::class, 'handleGoogleCallback']);

// Login Admin Superadmin Editor
Route::prefix('administrator')->middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytic', [Analytic::class, 'index']);
    Route::resource('admin', AdminController::class);
    Route::resource('post', ContentController::class);
    Route::resource('premiumcontent', PremiumContentController::class);
    Route::resource('video-article', VideoArticleController::class);
    Route::resource('webinars', WebinarsControllers::class);
    Route::get('register-webinar-export/{webinar_slug}', [RegisterWebinarResult::class, 'registerWebinarExport'])->name('exportregisterwebinar');
    Route::get('/post/edittitle/{id}', [ContentController::class, 'edittitle']);
    Route::post('/post/updatetitle', [ContentController::class, 'updatetitle']);
    Route::get('/premiumcontent/edittitle/{id}', [PremiumContentController::class, 'edittitle']);
    Route::resource('category-article', CategoryArticle::class);
    Route::resource('category-premium', CatPremiumController::class);
    Route::resource('category-webinars', CategoryWebinarController::class);
    Route::resource('categorycommunity', CategoryCommunity::class); //diganti-
    Route::resource('tags', TagsController::class);
    Route::post('/subcat', [CategoryArticle::class, 'subcat']);
    Route::resource('tagswebinars', TagsWebinarsControllers::class);
    Route::resource('tagscommunity', TagsCommunity::class);
    Route::resource('community-news', CommunityNews::class);
    Route::get('/community-news/edittitle/{id}', [CommunityNews::class, 'edittitle']);
    Route::resource('community-video', CommunityVideoController::class);
    Route::resource('communitiesgroup', CommunityGroupController::class);
    Route::get('/media', [MediaController::class, 'index']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    // Route Superadmin
    Route::get('/superadmin', [UserController::class, 'superadmin']);

    // Route Admin
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/admin/create', [UserController::class, 'admincreate']);
    Route::post('/admin/postadmin', [UserController::class, 'postadmin']);

    // Route Editor
    Route::get('/editor', [UserController::class, 'editor']);
    Route::get('/editor/create', [UserController::class, 'editorcreate']);
    Route::post('/editor/posteditor', [UserController::class, 'posteditor']);
    // Route Contributor
    Route::get('/contributor', [UserController::class, 'contributor']);

    // Route Subscribe
    Route::get('/subscriber', [UserController::class, 'subscribes']);
});

// Route::group(['middleware' => ['auth']], function () {
  
// });
