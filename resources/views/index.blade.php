<!DOCTYPE html>
<html>

<head>
    <title>Elenco Film</title>
</head>

<body>
    <div class="container">
        <h1>Elenco Film</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"><strong>Titolo Originale:</strong> {{ $movie->original_title }}</p>
                            <p class="card-text"><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
                            <p class="card-text"><strong>Data:</strong> {{ $movie->date }}</p>
                            <p class="card-text"><strong>Voto:</strong> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
