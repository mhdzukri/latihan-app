<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UluKasokController;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UluKasokController::class, 'index'])->name('view-beranda');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth:web,customer');

Route::get('/kontak', [UluKasokController::class, 'viewKontak'])->name('view-kontak');
Route::get('/informasi', [UluKasokController::class, 'viewInformasi'])->name('view-informasi');

Route::get('/user/ticket/{order:invoice_number}', [UluKasokController::class, 'viewDetailTicket'])->name('view-detail-ticket');

Route::post('/user/payment/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::get('/storage-link', function () {
    // Run artisan command
    Artisan::call('storage:link');

    return response()->json([
        'message' => 'Storage link created successfully.',
        'output'  => Artisan::output(),
    ]);
})->name('storage.link');
