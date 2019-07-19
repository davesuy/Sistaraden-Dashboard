<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MarketAutomationController;
use App\Http\Controllers\Backend\StatisticsController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\DocumentationController;
use App\Http\Controllers\Backend\Crm\AccountController;
use App\Http\Controllers\Backend\Crm\ActiveListController;
use App\Http\Controllers\Backend\Crm\CampaignController;
use App\Http\Controllers\Backend\Crm\ClientController;
use App\Http\Controllers\Backend\Crm\EmailController;
use App\Http\Controllers\Backend\Crm\EventController;
use App\Http\Controllers\Backend\Crm\LeadController;
use App\Http\Controllers\Backend\Crm\ListsController;

// All route names are prefixed with 'admin.'.
Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('market-automation', [MarketAutomationController::class, 'index'])->name('market-automation');
Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics');
Route::get('create-ticket', [TicketController::class, 'index'])->name('create-ticket');
Route::get('faq', [FaqController::class, 'index'])->name('faq');
Route::get('faq-privacy', [FaqController::class, 'privacy'])->name('faq-privacy');
Route::get('documentation', [DocumentationController::class, 'index'])->name('documentation');

// CRM

Route::group(['namespace' => 'Crm', 'prefix' => 'crm', 'as' => 'crm.', 'middleware' => 'admin'], function () {

	Route::get('accounts', [AccountController::class, 'index'])->name('accounts');
	Route::get('activelists', [ActiveListController::class, 'index'])->name('activelists');
	Route::get('campaigns', [CampaignController::class, 'index'])->name('campaigns');
	Route::get('clients', [ClientController::class, 'index'])->name('clients');
	Route::get('emails', [EmailController::class, 'index'])->name('emails');
	Route::get('events', [EventController::class, 'index'])->name('events');
	Route::get('leads', [LeadController::class, 'index'])->name('leads');
	Route::get('lists', [ListsController::class, 'index'])->name('lists');


});
