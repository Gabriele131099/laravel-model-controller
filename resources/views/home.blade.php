<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Model-controller</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
        <main class="">
            <div class="row">
                    @foreach($allMovies as $movie)
                        <div class="col-2">
                            <img src="{{ $movie->thumb }}" alt="thumb"/>
                            <h4>{{$movie->title}}</h4>
                            <div class="">
                              <span>Date: {{$movie->date}}</span>
                              <span>{{$movie->description}}</span>
                            </div>
                        </div>
                    @endforeach
                
            </div>
        </main>


</body>
</html