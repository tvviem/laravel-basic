@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest()) {{-- if user login --}}
        @if(Auth::user()->id == $post->user_id) {{-- Va neu bai viet cua nguoi dung nay --}}
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection