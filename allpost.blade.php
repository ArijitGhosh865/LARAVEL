@extends('post')
@section('content')
    
    <div>
        <h2>All Posts:</h2>
        @foreach($posts as $post)
        <h4> {{$post->user_name}} : {{ $post->body }} </h4>
        
        @endforeach 
    </div>
    

@endsection