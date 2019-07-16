<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MarketAutomationController;
use App\Http\Controllers\Backend\StatisticsController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\DocumentationController;

// All route names are prefixed with 'admin.'.
Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('market-automation', [MarketAutomationController::class, 'index'])->name('market-automation');
Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics');
Route::get('create-ticket', [TicketController::class, 'index'])->name('create-ticket');
Route::get('faq', [FaqController::class, 'index'])->name('faq');
Route::get('faq-privacy', [FaqController::class, 'privacy'])->name('faq-privacy');
Route::get('documentation', [DocumentationController::class, 'index'])->name('documentation');
