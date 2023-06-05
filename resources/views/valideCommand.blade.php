@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-danger">Login Required</h1>
        <p class="text-success">Please login to access this feature.</p>
        <a class="btn btn-success" href="{{ route('login') }}">Login</a>
    </div>
</div>
@endsection
