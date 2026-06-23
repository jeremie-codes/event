<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;

Route::get('/', [InviteController::class, 'index'])->name('invitation.index');
Route::get('/invitation/{guest}', [InviteController::class, 'show'])->name('invite.show');

Route::post('/invite/{guest}/respond', [InviteController::class, 'respond'])
    ->name('invite.respond');
