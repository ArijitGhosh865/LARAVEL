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
        <form action="{{url('getdata')}}"method="post">
            @csrf
            
            <h3>NEW POST :</h3>
            <br>
            <textarea
                cols="30"
                rows="10" type="text" name="body" > </textarea>
            <br>    
            <input type="submit" value="submit form">
            
        </form>    
    </body>
</html>