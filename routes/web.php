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
});


// locale route
Route::get('lang/{locale}',[LanguageController::class, 'swap']);

Auth::routes();

