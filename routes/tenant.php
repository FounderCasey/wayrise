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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // Only authenticated users may enter...
        return view('tenants.dashboard');
    });

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/dashboard/settings', function () {
        return view('tenants.settings');
    })->middleware('check_role:' . "Admin");

    Route::get('send_test_email', function () {
        Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
            $message->subject('Mailgun and Laravel are awesome!');
            $message->from('no-reply@wayrise.io', Auth::user()->name);
            $message->to('ioscasey@gmail.com');
        });
    });

    Route::post('inbound-mail', function (Request $request) {
        Log::info($request->all());
        return response()->json(['status' => 'ok']);
    });
});
