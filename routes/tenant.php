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
    Route::get('/app', function () {
        // Only authenticated users may enter...
        return view('tenants.app');
    });
});
