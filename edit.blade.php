<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <h1>form</h1>
        @if($errors->any()) 
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
        
        @endif
        <form method="post" action="{{action('PostController@update', $id)}}">
            @csrf
            
            <h3>EDIT POST :</h3>
            <br>
            <input type="hidden" name="_method" value="PATCH" />
            <input
             
                 type="text" name="body" value="{{$post->body}}" placeholder="edit post">
            <br>    
            <input type="submit" value="EDIT">
            
        </form>    
    </body>
</html>