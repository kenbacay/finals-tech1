@extends('layouts.app', ['title' => 'TFA1 POS | About'])

@section('content')

<div class="card">
    <h1>About TFA1 POS</h1>

    <p>
        TFA1 POS is a basic Laravel application created for learning
        routes, controllers, Blade views, and static PHP array data.
    </p>

    <p>
        The customer and user records are currently stored inside their
        respective controllers. They can later be replaced with database models.
    </p>
</div>

@endsection