<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;

Route::get('/', [InviteController::class, 'index'])->name('invitation.index');
Route::get('/invitation/{guest}', [InviteController::class, 'show'])->name('invitation.show');
