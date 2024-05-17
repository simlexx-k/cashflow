<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/distributale', function () {
        return Inertia::render('Distributable');
    })->name('distributable');
    Route::get('/updates', function () {
        return Inertia::render('Updates');
    })->name('updates');
    Route::get('/data-table', function () {
        return Inertia::render('DataTable');
    })->name('data-table');
});
