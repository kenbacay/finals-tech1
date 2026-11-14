@extends('layouts.app', ['title' => 'TFA1 POS | Home'])

@section('content')

<div class="card">
    <h1>Welcome to TFA1 POS</h1>

    <p>
        This is a Laravel-based Point-of-Sale application.
        It contains customer accounts, user accounts, and basic navigation.
    </p>

    <a class="button" href="{{ route('customers.index') }}">
        View Customers
    </a>
</div>

@endsection