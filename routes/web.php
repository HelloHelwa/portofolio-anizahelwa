<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Mengarahkan halaman utama (/) langsung ke PortfolioController
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::get('/pillars', [PortfolioController::class, 'pillars'])->name('portfolio.pillars');
Route::get('/missions', [PortfolioController::class, 'missions'])->name('portfolio.missions');
Route::get('/projects', function () {
    return view('projects');
});