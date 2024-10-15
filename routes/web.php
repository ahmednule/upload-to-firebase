<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PestController;
use App\Models\Pest;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $pests = Pest::all(); // Fetch all pests from the database
    return view('dashboard', compact('pests')); // Pass pests to the view
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/pests', [PestController::class, 'store'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
