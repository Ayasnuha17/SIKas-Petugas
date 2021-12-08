<?php

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

//route itu nanti berhubungan dengan controller biar route bisa berhubungan dengan view
Route::get('/', function () {
    return view('auth.login');
});


Route::prefix('pengurus')
    ->namespace('pengurus') //ini manggil dari folder controller dengan nama folder (beneran folder ya) pemgurus
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('pengurus-dashboard');
        Route::get('/kasmasuk', 'KasMasukController@index')->name('pengurus-kasmasuk');
        Route::get('/kasmasuk/detailmasuk', 'KasMasukController@detailmasuk')->name('pengurus-detailmasuk');
        Route::get('/kaskeluar', 'KasKeluarController@index')->name('pengurus-kaskeluar');
        Route::get('/kaskeluar/detailkeluar', 'KasKeluarController@detailkeluar')->name('pengurus-detailkeluar');
        Route::get('/rekaptotal', 'RekapTotalController@index')->name('pengurus-rekaptotal');
        Route::get('/donatur', 'DonaturController@index')->name('pengurus-donatur');
    });

Auth::routes();

// Route::get('/', 'DashboardController@index')->name('pengurus-dashboard');
Route::get('/home', 'HomeController@index')->name('home');
