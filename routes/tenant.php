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
});

Route::get('/oauth/gmail', function () {
    return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function () {
    LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function () {
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});
