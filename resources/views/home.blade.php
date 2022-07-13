<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista dei film:</h1>
        @dump($movie)
        <ul>
            @foreach ($movie as $movi)
                <li style="font-size:22px">{{$movi->title}}</li>
                <li>{{$movi->original_title}}</li>
                <li>{{$movi->nationality}}</li>
                <li>{{$movi->date}}</li>
                <li>{{$movi->vote}}</li>
                <br />
            @endforeach
        </ul>
</body>
</html>