<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload</h1>
    
    <div>

        <form action="{{ route('fileUpload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" id="name" placeholder="Enter your name">
            <br><br>

            <input type="text" name="email" id="email" placeholder="Enter your email">
            <br><br>
    
            <input type="file" name="file" id="file">
            <br><br>
    
            <button type="submit">Submit</button>
    
        </form>

    </div>

    @if(isset($path) && isset($fileName))
        <div style="margin-top: 20px;">
            <a href="{{$path}}" target="_blank" rel="noopener noreferrer">
                <img style="width:200px" src="{{ $path }}" alt="{{ $fileName }}">
            </a>
        </div>
    @endif
</body>
</html>