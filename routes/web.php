<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/', [PageController::class, 'index'])->name('nvlanding');
Route::get('/consulting', [PageController::class, 'consulting'])->name('consulting');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [PageController::class, 'handleContact'])->name('contactus.submit');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/web-development', [PageController::class, 'webDevelopment'])->name('web.development');
Route::get('/graphic-design', [PageController::class, 'graphicDesign'])->name('graphic.design');
Route::get('/digital-marketing', [PageController::class, 'digitalMarketingPage'])->name('digital.marketing');
Route::get('/ms-office', [PageController::class, 'msOffice'])->name('ms.office');
Route::get('/saas', [PageController::class, 'saas'])->name('saas');
Route::get('/automation', [PageController::class, 'automation'])->name('automation');
Route::get('/data-analytics', [PageController::class, 'dataAnalytics'])->name('data.analytics');
Route::get('/ai-engineering', [PageController::class, 'aiEngineering'])->name('ai.engineering');
Route::get('/services/{slug}', [PageController::class, 'service'])->name('service.show');
Route::get('/get-a-quote', [PageController::class, 'getQuote'])->name('quote');
Route::post('/get-a-quote', [PageController::class, 'handleQuote'])->name('quote.submit');
Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [PageController::class, 'handleFeedback'])->name('feedback.submit');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/refund-policy', [PageController::class, 'refundPolicy'])->name('refund.policy');
Route::post('/consulting', [PageController::class, 'handleConsulting'])->name('consulting.submit');

