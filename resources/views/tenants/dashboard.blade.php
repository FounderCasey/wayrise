@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ Auth::user()->name }}
            {{ Auth::user()->role}}

        </div>

        <body>
            <h1>{{ LaravelGmail::user() }}</h1>
            @if(LaravelGmail::check())
                <a href="{{ url('oauth/gmail/logout') }}">logout</a>
            @else
                <a href="{{ url('oauth/gmail') }}">login</a>
            @endif
        </body>

        <div class="links">
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="/dashboard/settings">Settings</a>
            <a href="/logout">Logout</a>
        </div>
    </div>
</div>
@endsection