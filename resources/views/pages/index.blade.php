@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to Laravel!</h1>
    <p>This is Laravel app from Youtube</p>
    <p>Basic blog demo</p>
    @if(Auth::guest()) {{-- if user not login --}}
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    @endif
</div>
@endsection