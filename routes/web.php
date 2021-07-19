<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CheckControl;
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
Route::view('/about_us','about_us')->name('about_us');
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
Route::view('/prolog-sub/tictactoe','prolog-sub/tictactoe')->name('prolog-sub.tictactoe');
Route::view('/prolog-sub/waterjug','prolog-sub/waterjug')->name('prolog-sub.waterjug');

//mp-sub
Route::view('/mp-sub/activate','mp-sub/activate')->name('mp-sub.activate');
Route::view('/mp-sub/alphabet','mp-sub/alphabet')->name('mp-sub.alphabet');
Route::view('/mp-sub/xor','mp-sub/xor')->name('mp-sub.xor');

//pnn-sub
Route::view('/pnn-sub/c_section','pnn-sub/c_section')->name('pnn-sub.c_section');
Route::view('/pnn-sub/stud_res','pnn-sub/stud_res')->name('pnn-sub.stud_res');

//simplegenetic-sub
Route::view('/simplegenetic-sub/genetic_algo','simplegenetic-sub/genetic_algo')->name('simplegenetic-sub.genetic_algo');

//anfis-sub
Route::view('/anfis-sub/impl_anfis','anfis-sub/impl_anfis')->name('anfis-sub.impl_anfis');

//bnn-sub
Route::view('/bnn-sub/covid_pred','bnn-sub/covid_pred')->name('bnn-sub.covid_pred');
Route::view('/bnn-sub/yahoo_stock','bnn-sub/yahoo_stock')->name('bnn-sub.yahoo_stock');

//cnn-sub
Route::view('/cnn-sub/face_recog','cnn-sub/face_recog')->name('cnn-sub.face_recog');

//demorgan-sub
Route::view('/demorgan-sub/all_laws','demorgan-sub/all_laws')->name('demorgan-sub.all_laws');
Route::view('/demorgan-sub/maxmin_comp','demorgan-sub/maxmin_comp')->name('demorgan-sub.maxmin_comp');
Route::view('/demorgan-sub/maxprod_comp','demorgan-sub/maxprod_comp')->name('demorgan-sub.maxprod_comp');

//fuzzyset-sub
Route::view('/fuzzysets-sub/fuzzy','fuzzysets-sub/fuzzy')->name('fuzzyset-sub.fuzzy');

//snn-sub
Route::view('/snn-sub/bpn','snn-sub/bpn')->name('snn-sub.bpn');

//assignment
Route::get('/quiz/{subject}/{difficulty_level}', [QuizController::class,  'viewQuiz'])->name('quiz.viewQuiz');


//feedback
Route::post('/comment', [CommentsController::class, 'store']);
Route::post('/toggle-approve', [CommentsController::class, 'approval']);
Route::post('record/delete/{id}', [CommentsController::class, 'destroy']);
Route::get('/admindash', [CommentsController::class, 'dash'])->name('admindash');
Route::get('/prolog-sub/hanoi', [CommentsController::class, 'index'])->name('prolog-sub.hanoi');


//quizcheck
//  Route::post('/CheckControl',[CheckControl::class], 'CheckControl_Fun')->name('quiz.check');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
