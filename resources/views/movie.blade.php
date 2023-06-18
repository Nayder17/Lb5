<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelicula - {{$movie->title}}</title>
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
                <div class="row">
                    <div class="col col-md-6 m-auto">
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
                                <div class="d-inline-flex mb-3">
                                    <span class="text-muted fw-bold me-2">Año:</span>
                                    <small class="text-body-secondary">{{$movie->year}}</small>
                                </div>
                                <div class="d-flex justify-content-between gap-5 align-items-center">
                                    <div class="btn-group">
                                        <button id="del-cart" class="btn btn-outline-secondary">Cancelar</a>
                                    </div>
                                    <div class="btn-group">
                                        <input id="amount" type="number" placeholder="Ingrese cantidad" class="form-control" required>
                                        <button id="add-cart" class="btn btn-sm btn-outline-secondary">Agregar</button>
                                        <div class="d-flex align-items-center px-2 ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="10" cy="20.5" r="1" />
                                                <circle cx="18" cy="20.5" r="1" />
                                                <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                                            </svg>
                                            <span class="ms-2" id="stock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="mb-1">Peliculas en español - 2023</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        let stock = localStorage.getItem("movie-{{$movie->id}}");
        if (!stock) {
            stock = 10;
            localStorage.setItem("movie-{{$movie->id}}", stock);
        }
        $("#stock").text(stock);
        $('#add-cart').on('click', function() {
            if (stock > 0) {
                let amount = $("#amount").val();
                if (amount > stock) {
                    alert("Cantidad no disponible en el stock");
                }else{
                    stock -= amount;
                    localStorage.setItem("movie-{{$movie->id}}", stock);
                    $("#stock").text(stock);
                    alert("Pelicula agregado al carrito");
                }
            } else {
                alert("Stock agotado");
            }
        });
        $('#del-cart').on('click', function() {
            if (stock < 10) {
                stock++;
                localStorage.setItem("movie-{{$movie->id}}", stock);
                $("#stock").text(stock);
                alert("Pelicula eliminado del carrito");
            }
        });
    </script>
</body>

</html>