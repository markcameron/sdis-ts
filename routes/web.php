<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Mail\InterventionExample;
use Illuminate\Support\Facades\Mail;
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

Route::get('test-mail', function () {
    Mail::to('alarmes-sdis@kram.xyz')->send(new InterventionExample());
});

Route::get('/', HomepageController::class)->name('homepage');

Route::get('actualites/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('documents', [DocumentsController::class, 'index'])->name('documents');

Route::controller(ContactController::class)->group(function () {
    Route::name('contact.')->prefix('contact')->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('submit', 'submit')->name('submit');
    });
});

Route::get('{slug}', [PagesController::class, 'show'])->name('page.show');
