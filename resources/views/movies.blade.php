<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
        <p>{{ $movie->original_title }}</p>
        <p>{{ $movie->nationality }}</p>
        <p>{{ $movie->date }}</p>
        <p>{{ $movie->vote}}</p>
        {{-- <div>{{$movie}}</div> --}}
    @endforeach
</body>
</html>