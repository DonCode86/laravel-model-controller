<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
</head>
<body>
  <h1>Lista films:</h1>
  <ul>
    @foreach ($movies as $movie)
    <div class="cards-container">
      <a href="{{route('show', $movie->id)}}">
        <div class="card-box">
          <h2>Titolo: {{$movie->title}}</h2>
          <h4>Titolo originale: {{$movie->original_title}}</h4>
          <h5>Nazionalità: {{$movie->nationality}}</h5>
          <h5>Data uscita: {{$movie->date}}</h5>
          <h5>Voto: {{$movie->vote}}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </ul>
</body>
</html>