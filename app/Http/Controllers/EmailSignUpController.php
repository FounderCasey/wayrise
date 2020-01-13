<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailSignUpController extends Controller
{
    function createEmail(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
        ]);
        Email::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
}
