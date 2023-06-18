<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <header data-bs-theme="dark">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="me-2">
                        <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                        <line x1="7" y1="2" x2="7" y2="22"></line>
                        <line x1="17" y1="2" x2="17" y2="22"></line>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <line x1="2" y1="7" x2="7" y2="7"></line>
                        <line x1="2" y1="17" x2="7" y2="17"></line>
                        <line x1="17" y1="17" x2="22" y2="17"></line>
                        <line x1="17" y1="7" x2="22" y2="7"></line>
                    </svg>
                    <strong>Peliculas</strong>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($movies as $movie)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{$movie->poster}}" alt="">
                            <span class="position-absolute top-0 end-0 me-3 mt-2 badge text-bg-primary">{{$movie->gender}}</span>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$movie->title}}
                                </h5>
                                <p class="card-text">
                                    {{$movie->description}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('movie', ['movie' => $movie])}}" class="btn btn-sm btn-outline-secondary">Ver más</a>
                                    </div>
                                    <small class="text-body-secondary">{{$movie->year}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="mb-1">Peliculas en español - 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>