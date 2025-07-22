
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\publicprofilecontoller;
use Illuminate\Support\Facades\Route;
Route::get('/@{user:username}', [publicprofilecontoller::class, 'show'])->name('publicprofile.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('dashboard');
    Route::get('/post/createpost', [PostController::class, 'create'])->name('post.createpost');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/@{username}/{post:slug}', [PostController::class, 'show'])->name('post.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';