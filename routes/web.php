<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\ProfileController;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard',[
        'merchandises' => Merchandise::orderByDesc('created_at')->paginate(10),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  //Profile
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  Route::post('/merchandise-search',[MerchandiseController::class,'search'])->name('merchandise.search');
});

Route::group(['middleware' => ['role:admin', 'auth']], function () {
    // Event Management
    Route::resource('/event', EventController::class);
    Route::get('/event-archived', [EventController::class, 'archived'])->name('event.archived');

    //Merchandise
    Route::resource('/merchandise', MerchandiseController::class);
    Route::get('/merchandise-archived', [MerchandiseController::class, 'archived'])->name('merchandise.archived');

});


require __DIR__ . '/auth.php';
