@extends('layouts.app')

@section('content')
<dashboard v-bind:company="{{json_encode(tenant('company'))}}"></dashboard>
@endsection