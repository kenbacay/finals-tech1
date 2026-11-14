@extends('layouts.app', ['title' => 'Customer Accounts'])

@section('content')

<h1>Customer Accounts</h1>

<p>Customer records from a static PHP array.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td>{{ $customer['name'] }}</td>
                <td>{{ $customer['email'] }}</td>
                <td>{{ $customer['phone'] }}</td>
                <td>{{ $customer['status'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection 