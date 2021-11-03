<?php

use App\Http\Controllers\AdminController;
use App\Models\questionnaire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionnaireController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[AdminController::class,'index'])->name('dashboard');

Route::get('/sondage/all',[QuestionnaireController::class,'AllQ'])->name('all.questionaire');

// Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::post('/sondage/add',[QuestionnaireController::class,'Add'])->name('store.questionaire');

Route::get('/sondage/{questionnaire}',[QuestionnaireController::class,'show'])->name('show.questionaire');
