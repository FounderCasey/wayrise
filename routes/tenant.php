<?php

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider
| with the tenancy and web middleware groups. Good luck!
|
*/

use Webklex\IMAP\Client;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {

        $oClient = new Client([
            'host'          => 'imap.gmail.com',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => true,
            'username'      => 'ioscasey@gmail.com',
            'password'      => 'Chica12345',
            'protocol'      => 'imap'
        ]);

        // //Connect to the IMAP Server
        // $oClient->connect();

        $oClient->connect();

        dd($oClient);

        return view('tenants.dashboard');
    });

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/dashboard/settings', function () {
        return view('tenants.settings');
    })->middleware('check_role:' . "Admin");

    Route::post('inbound-mail', function (Request $request) {
        Log::info($request->all());
        return response()->json(['status' => 'ok']);
    });
});
