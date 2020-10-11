<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[TermController::class,"index"]);
Route::get("/index",[TermController::class,"index"]);
Route::get("/officer_term",[TermController::class,"term_select"]);
Route::get("/term_check",[TermController::class,"term_check"]);
Route::get("/contact",[TermController::class,"contact"]);
Route::get("/privacypolicy",[TermController::class,"privacypolicy"]);
