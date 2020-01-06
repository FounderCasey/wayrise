@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{tenant('name')}}
        </div>
        <div class="links">
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="/createTenant">Sign Up</a>
        </div>
    </div>
</div>
@endsection