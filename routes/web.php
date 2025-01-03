<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AdminController;

Route::get('/', [DashbordController::class, 'index']);

Route::get('/trainers', [DashbordController::class, 'trainers']);

Route::get('/trainer/add', [DashbordController::class, 'add']);
Route::post('/trainer/add', [DashbordController::class, 'store']);

Route::get('/trainers/delete/{id}', [DashbordController::class, 'delete']);

Route::get('/gym-services', [DashbordController::class, 'gymService']);

Route::post('/gym-services', [ServiceController::class, 'addService']);

Route::get('/contact', function(){
    return view('contact.contact_us');
});
Route::post('/contact', [ContactController::class, 'contact']);

Route::get('membership/checkout', function(){
    return view('membership.checkout');
});

Route::post('membership/checkout', [StripeController::class, 'createMembership'])->middleware('auth');

Route::get('membership/success', [StripeController::class, 'success'])->name('membership.success');

Route::get('membership/cancel', [StripeController::class, 'cancel'])->name('membership.cancel');

Route::get('/admin/messages', [AdminController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
