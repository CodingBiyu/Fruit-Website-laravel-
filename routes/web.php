<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\fruitcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('userdashboard');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/userdashboard', [usercontroller::class, 'index'])->name('userdashboard')->middleware('auth');
Route::get('/admindashboard', [admincontroller::class, 'index'])->middleware(['auth','admin']);


Route::get('/userfruit', [fruitcontroller::class, 'userfruit'])->name('user.fruit');
Route::delete('/userfruit/{Fruit}', [fruitcontroller::class, 'purchasefruit'])->name('purchase.fruit');


Route::get('/addfruit', [fruitcontroller::class, 'index'])->name('view.fruit')->middleware(['auth','admin']);
Route::post('/addfruit', [fruitcontroller::class, 'store'])->name('add.fruit')->middleware(['auth','admin']);
Route::delete('/addfruit/{Fruit}', [fruitcontroller::class, 'destroy'])->name('delete.fruit')->middleware(['auth','admin']);
Route::get('/fruit/{id}/edit', [FruitController::class, 'edit'])->name('edit.fruit')->middleware(['auth','admin']);
Route::put('/fruit/{id}', [FruitController::class, 'update'])->name('update.fruit')->middleware(['auth','admin']);


require __DIR__.'/auth.php';
