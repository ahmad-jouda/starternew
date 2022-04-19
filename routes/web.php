<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('landing', 'Front\FirstController@index')->name('test.index');

/*
Route::get('/landing', function () {
    return view('landing');
});
*/
// route parameter
/*
    //مطلوب
Route::get('/test1/{id}', function ($id) {
    return $id;
});
    //غير مطلوب
Route::get('/test2/{id?}', function () {
    return 'welcome';
});
*/

//route name
/*
Route::get('/test2/{id?}', function () {
    return 'welcome';
})->name('test');
<a href="{{ route('test', [55]) }}" class="text-sm text-gray-700 dark:text-gray-500 underline">test</a>
*/
/*
Route::namespace('Front')->prefix('users')->middleware('auth')->group(function (){

    //all route only controller or methods in folder name "Front"
    Route::get('show','testController@showUserName');
});

Route::group([
    'prefix' => 'users',
    'namespace' => 'Front'
    'middleware' => 'auth'
], function (){
    //all route only controller or methods in folder name "Front"
    Route::get('show','testController@showUserName');
});
*/
/*
Route::get('show','testController@showUserName')->middleware('auth');
*/
/*
Route::resource('test', 'Front\FirstController');

Route::get('test', 'Front\FirstController@index')->name('test.index');
Route::post('test', 'Front\FirstController@store')->name('test.store');
Route::get('test/create', 'Front\FirstController@store')->name('test.create');
Route::get('test/{id}', 'Front\FirstController@show')->name('test.show');
Route::put('test/{id}', 'Front\FirstController@update')->name('test.update');
Route::delete('test/{id}', 'Front\FirstController@destroy')->name('test.destroy');
Route::get('test/{id}/edit', 'Front\FirstController@edit')->name('test.edit');
*/

