@extends('post')
@section('content')
    
    <div>
        <h2>My Posts:</h2>
        @foreach($posts as $post)
        <h4> {{$post['user_name']}} : {{ $post['body'] }} </h4>
        <div>
        <a href="{{action('PostController@edit', $post['id'])}}" class="btn btn-warning" ><button>Edit</button></a>
        <form method="post" class="delete_form" action="{{action('PostController@destroy', $post['id'])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>
        </div>   
        @endforeach 
    </div>
    
@endsection