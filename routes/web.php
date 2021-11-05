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



Route::get('/sondage/all',[QuestionnaireController::class,'AllQ'])->name('all.questionaire');

Route::post('/sondage/add',[QuestionnaireController::class,'Add'])->name('store.questionaire');

Route::get('/sondage/{questionnaire}',[QuestionnaireController::class,'show'])->name('show.questionaire');

// Admin route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[AdminController::class,'index'])->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/questionnaire',[AdminController::class,'AllQues'])->name('dashboard.questionaire');

Route::middleware(['auth:sanctum', 'verified'])->get('/question',[AdminController::class,'getAll'])->name('dashboard.question');

Route::middleware(['auth:sanctum', 'verified'])->post('/question/add',[AdminController::class,'addQuestion'])->name('store.question');
