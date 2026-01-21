<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//フォーム入力ページを表示する
Route::get('/', [ContactController::class, 'index']);

//フォーム入力ページで、送信ボタンを押して、入力内容確認ページへ遷移
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

//入力内容確認ページで、送信ボタンを押して、お問い合わせ完了ページへ遷移
Route::post('/contacts', [ContactController::class, 'store']);
