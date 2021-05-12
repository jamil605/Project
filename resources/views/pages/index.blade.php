@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome Home User</h1>
        <p>If you are already registered you can login<br><br>
        not registered Please Do And Thank You</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection
