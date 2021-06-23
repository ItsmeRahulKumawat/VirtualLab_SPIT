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

Route::get('/', function () {
    return view('template');
});

Route::view('/homepage','homepage')->name('homepage');
Route::view('/prolog','prolog')->name('prolog');
Route::view('/mp_neuron','mp_neuron')->name('mp_neuron');
Route::view('/pnn','pnn')->name('pnn');
Route::view('/bnn','bnn')->name('bnn');
Route::view('/cnn','cnn')->name('cnn');
Route::view('/supervised_nn','supervised_nn')->name('supervised_nn');
Route::view('/fuzzysets','fuzzysets')->name('fuzzysets');
Route::view('/morgan','morgan')->name('morgan');
Route::view('/fuzzycont','fuzzycont')->name('fuzzycont');
Route::view('/genetic','genetic')->name('genetic');
Route::view('/anfis','anfis')->name('anfis');

//prolog-sub
Route::view('/prolog-sub/monkey','prolog-sub/monkey')->name('prolog-sub.monkey');
Route::view('/prolog-sub/list','prolog-sub/list')->name('prolog-sub.list');
Route::view('/prolog-sub/hanoi','prolog-sub/hanoi')->name('prolog-sub.hanoi');
Route::view('/prolog-sub/sudoku','prolog-sub/sudoku')->name('prolog-sub.sudoku');
Route::view('/prolog-sub/puzzle','prolog-sub/puzzle')->name('prolog-sub.puzzle');
Route::view('/prolog-sub/queens','prolog-sub/queens')->name('prolog-sub.queens');

//mp-sub
Route::view('/mp-sub/activate','mp-sub/activate')->name('mp-sub.activate');
Route::view('/mp-sub/alphabet','mp-sub/alphabet')->name('mp-sub.alphabet');
Route::view('/mp-sub/xor','mp-sub/xor')->name('mp-sub.xor');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
