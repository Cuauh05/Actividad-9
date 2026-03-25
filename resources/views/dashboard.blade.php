@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}</p>
</div>
@endsection