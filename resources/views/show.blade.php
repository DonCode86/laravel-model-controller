<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ URL::asset('css/show.css') }}" />
</head>
<body>
  <button class="btn"><a href="{{route('homepage')}}">HOMEPAGE</a></button>
  <div class="card-container">
    <h1>{{$movie->title}}</h1>
    <h2>Voto: {{$movie->vote}}</h2>
  </div>
</body>
</html>