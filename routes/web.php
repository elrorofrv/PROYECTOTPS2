<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendsController;
use App\Http\Controllers\EventsController;
use App\Models\Agends;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RatingController;

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

Route::get('/', function () {
    return view('welcome');
});


//crear rutas
Route::resource('admin/agends', AgendsController::class)->names('admin.agends');

//creacion de eventos
Route::resource('admin/events', EventsController::class)->names('admin.events');

//no borrar
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas relacionadas con la autenticación


// Rutas para la calificación
Route::get('/admin/rating', [RatingController::class, 'index'])->name('admin.rating.index');
Route::post('/admin/rating', [RatingController::class, 'store'])->name('admin.rating.store');

Route::get('/agradecimiento', function () {
    return view('agradecimiento'); // Devuelve la vista de agradecimiento
})->name('agradecimiento');


