<?php

use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;
use App\Http\Controllers\AuthController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [AuthController::class, 'redirect'])->name('redirect');

// admin Routes

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
});

Route::group(['prefix' => 'writer', 'moddleware' => ['auth', 'role:writer']], function () {
});

Route::group(['prefix' => 'user', 'middleware', ['auth', 'role:user']], function () {
});
