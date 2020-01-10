@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ Auth::user()->name }}
            {{ Auth::user()->role}}

        </div>
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