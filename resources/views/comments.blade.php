<!-- resources/views/posts/comments.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{$user->name}}'s Comments</h1>
    
    @foreach ($comment as $comment)
        <div class="comment">
            <p>{{$comment->content}}</p>
            <p>Posted on: {{$comment->created_at}}</p>
        </div>
    @endforeach

    {{ $comment->links()}}
@endsection