@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>        
    </div>
@endsection
