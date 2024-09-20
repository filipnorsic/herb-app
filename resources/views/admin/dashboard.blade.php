@extends('layout', ['admin' => true])

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome to the admin dashboard.</p>
        <a href="{{ route('clients.index') }}">Show all clients</a><hr>

        <h4>Search for a client:</h4>

        {{--}} <form action="{{ route('clients.show') }}" method="GET"> --}}
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter first name">

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter last name">

            <button type="submit">Search</button>
        </form>

    </div>
@endsection
