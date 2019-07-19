<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('vue', 'TestingVueController@index');



// Crm Accounts

Route::get('accounts', 'Backend\Crm\AccountController@getAccounts');

Route::get('activelists', 'Backend\Crm\ActiveListController@getActiveLists');

Route::get('campaigns', 'Backend\Crm\CampaignController@getCampaigns');

Route::get('clients', 'Backend\Crm\ClientController@getClients');

Route::get('emails', 'Backend\Crm\EmailController@getEmails');

Route::get('events', 'Backend\Crm\EventController@getEvents');

Route::get('leads', 'Backend\Crm\LeadController@getLeads');

Route::get('lists', 'Backend\Crm\ListController@getLists');