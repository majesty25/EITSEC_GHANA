<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\SendInvoiceController;
use App\Http\Controllers\UserManagement;
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



Route::get('/', [UserManagement::class, 'sendInvoice']);

Route::get('/login', [UserManagement::class, 'login']);

Route::get('/invoices', [UserManagement::class, 'viewInvoice']);

Route::get('/signup', [UserManagement::class, 'signup']);

Route::post('/signin', [UserManagement::class, 'signin']);

Route::get('/logout', [UserManagement::class, 'logout']);

Route::post('/register', [UserManagement::class, 'register']);

Route::post('/send', [EmailController::class, 'sendEmail']);

Route::post('/delete', [UserManagement::class, 'removeInvoice']);