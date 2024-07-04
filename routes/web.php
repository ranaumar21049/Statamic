<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    CollectionController,
    EntriesController,
    NavigationController,
    TaxonomiesController,
    TermsController,
    AssetsController,
    GlobalsController,
    FieldsetsController,
    UsersController,
};

// Breeze authentication routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
});

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__ . '/auth.php';

// Route for the root URL
Route::redirect('/', '/login');

// Route To Logout user
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Authentication Routes
Route::controller(AuthController::class)->prefix('auth')->as('auth.')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::get('/forgotPassword', 'forgotPassword')->name('forgot');
});

Route::middleware('auth')->group(function () {
    // Collections--Entries Routes
    Route::resource('collections', CollectionController::class)->except('show');
    Route::prefix('collections')->group(function () {
        Route::get('/{collection}/entries', EntriesController::class)->name('entries.index');
        Route::get('/{collection}/create', [EntriesController::class, 'create'])->name('entries.create');
        Route::post('/{collection}/store', [EntriesController::class, 'store'])->name('entries.store');
        Route::get('/{collection}/edit/{id}', [EntriesController::class, 'edit'])->name('entries.edit');
        Route::put('/{collection}/update/{id}', [EntriesController::class, 'update'])->name('entries.update');
        Route::get('/{collection}/destroy/{id}', [EntriesController::class, 'destroy'])->name('entries.destroy');
    });

    // Navigations Routes
    Route::resource('navigations', NavigationController::class);

    // Taxonomies--Terms Routes
    Route::resource('taxonomies', TaxonomiesController::class)->except('show');
    Route::prefix('taxonomies')->group(function () {
        Route::get('/{taxonomy}/terms', TermsController::class)->name('terms.index');
        Route::get('/{taxonomy}/create', [TermsController::class, 'create'])->name('terms.create');
        Route::post('/{taxonomy}/store', [TermsController::class, 'store'])->name('terms.store');
        Route::get('/{taxonomy}/edit/{id}', [TermsController::class, 'edit'])->name('terms.edit');
        Route::put('/{taxonomy}/update/{id}', [TermsController::class, 'update'])->name('terms.update');
        Route::get('/{taxonomy}/show/{id}', [TermsController::class, 'show'])->name('terms.show');
    });

    // Assets Routes
    Route::resource('assets', AssetsController::class)->except('show', 'create');

    // Global Routes
    Route::resource('globals', GlobalsController::class);

    // Fieldsets Routes
    Route::resource('fieldsets', FieldsetsController::class)->except('show');

    // Users Routes
    Route::resource('users', UsersController::class)->except('create', 'store', 'show');
});