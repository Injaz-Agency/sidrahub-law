<?php

use App\Http\Controllers;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')->prefix('{locale}')
//     ->middleware(['auth', 'verified', 'locale'])
//     ->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('{locale}')->middleware(['auth', 'locale'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/', [Controllers\SiteController::class, 'default'])->name('default');

Route::prefix('{locale}')->middleware('locale')->group(function () {
    Route::get('/dashboard', [Controllers\SiteController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);

    Route::get('/home', [Controllers\SiteController::class, 'home'])->name('home');
    Route::get('/professionals', [Controllers\SiteController::class, 'professionals'])->name('professionals');
    Route::get('/professionals/{professional}', [Controllers\SiteController::class, 'professionalShow'])->name('professionals.show');
    Route::get('/lawyer_join', [Controllers\SiteController::class, 'lawyerJoin'])->name('lawyer.join');
    Route::post('/lawyer_join', [Controllers\SiteController::class, 'lawyerJoinSubmit'])->name('lawyer.join.submit');
    Route::get('/legal_consultation', [Controllers\SiteController::class, 'legalConsultation'])->name('legal.consultation');
});
