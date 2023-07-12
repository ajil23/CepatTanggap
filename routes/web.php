<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PambulansController;
use App\Http\Controllers\PanakesController;
use App\Http\Controllers\backend\AmbulanceController;
use App\Http\Controllers\backend\NakesController;
use App\Http\Controllers\backend\PasienController;
use App\Http\Controllers\Backend\PusatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PapasienController;

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
Route::get('/redirects', [HomeController::class,"index"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin.index', function () {
        return view('admin.index');
    })->name('admin.index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [AdminController::class, 'perform'])->name('logout.perform');
 });



Route::middleware(['auth'])->group(function() {
    Route::resource("/pambulan", PambulansController::class);
    Route::resource("/pambulan", PambulansController::class);
    Route::get('/gantiStatus', [PambulansController::class, 'changeAmbulansStatus'])->name('gantiStatus');
    Route::get('/changeStatus', [PanakesController::class, 'changeBantuanStatus'])->name('changeStatus');
    Route::resource("/panakes", PanakesController::class);
    Route::resource("/papasien", PapasienController::class);
    Route::get('/nakes/view',[NakesController::class, 'NakesView'])->name('nakes.view');
    Route::get('/ambulance/view',[AmbulanceController::class, 'AmbulanceView'])->name('ambulance.view');
    Route::get('/pusat/view',[PusatController::class, 'PusatView'])->name('pusat.view');
    Route::get('/pasien/view',[PasienController::class, 'PasienView'])->name('pasien.view');

    // markAsRead function
    Route::get('markAsRead', function(){
        $user = App\Models\User::find(1);
        $user->notifications()->delete();
        return redirect() -> back();
    })->name('markRead');
});