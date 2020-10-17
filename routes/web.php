<?php
use App\Http\Controllers\LanguageController;
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

// Admin Route
Route::group([
	'namespace' => 'Admin',
	'middleware' => 'auth',
	'prefix' => 'admin'
	], function() {
		Route::get('/', 'DashboardController@dashboard');
});

Route::namespace('Frontend')->group(function() {
	Route::get('/', 'HomeController@index');
	Route::get('ph', 'HomeController@ph');
	Route::get('bpo', 'HomeController@bpo');
	Route::get('infokom', 'HomeController@infokom');
	Route::get('ekobis', 'HomeController@ekobis');
	Route::get('ristek', 'HomeController@ristek');
	Route::get('sosial', 'HomeController@sosial');
	Route::get('mikatan', 'HomeController@mikatan');
	Route::get('psdm', 'HomeController@psdm');
	Route::get('kesma', 'HomeController@kesma');
	Route::get('article', 'ArticleController@article');
});


// locale route
Route::get('lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();

