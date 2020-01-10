@extends('layouts.app')

@section('content')
<div>
  <h1>Settings</h1>
  <p>This is restricted to Owners and admins only</p>
    <div class="links">
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="/logout">Logout</a>
    </div>
</div>
@endsection