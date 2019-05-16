<?php
// | Web Routes
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
use App\realestate;
use Illuminate\Http\Request;



// 物件一覧表示
Route::get('/', 'RealestatesController@index');

// 物件を追加
Route::post('/realestates', 'RealestatesController@store');

//更新画面 
Route::post('/realestatesedit/{realestates}','RealestatesController@edit');

//更新処理
Route::post('/realestates/update', 'RealestatesController@update');

// 物件を削除
Route::post('/realestate/{realestate}','RealestatesController@destroy');

//mapを表示
// Route::post('/realestatesmap/{realestate}','RealestatesController@map');

//認証機能を使用する（php artisan make:auth　php artisan migrateで自動生成）
Auth::routes();

//追加されたファイル（php artisan make:auth　php artisan migrateで自動生成）
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'RealestatesController@index');