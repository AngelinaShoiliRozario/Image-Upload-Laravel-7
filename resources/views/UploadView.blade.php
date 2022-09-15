<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading Image</title>
</head>
<body>
    @if(Session::has('success'))
        <h1>{{Session::get('success')}}</h1>
    @endif

    @if(session()->has('fail'))
        <h1>{{session()->get('fail')}}</h1>
    @endif

    <form action="/save_image" method='post' enctype="multipart/form-data">
    @csrf
        <label >Upload a Image Here</label>
        <input type="file" name="image" >
        <button >SAVE IMAGE</button>
    </form>
    <button><a href="/view_image">VIEW IMAGES</a></button>


    
</body>
</html>