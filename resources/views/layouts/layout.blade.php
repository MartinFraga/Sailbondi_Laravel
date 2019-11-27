<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sailbondi</title>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container">

        <!-- NAVBAR -->
        <div>
            <nav class="navbar navbar-expand-md navbar-dark bg-info container">
                <a class="navbar-brand" href="#">
                    <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30"
                        class="d-inline-block align-top" alt="">
                    Sailbondi
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ingreso
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="FormRegister.php">Registrarse</a>
                                <a class="dropdown-item" href="FormLogin.html">Login</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faqs">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contacto</a>
                        </li>
                    </ul>
                    <span class="navbar-text text-white">
                        0810 123 0787
                    </span>
                </div>
            </nav>
        </div><!-- NAVBAR -->

        <!-- CENTRAL IMAGE -->
        <div>
            <img src="/images/sailbondi.png"
                class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="Logo Sailbondi">
        </div><!-- CENTRAL IMAGE -->

        @yield('content')

        <!-- FOOTER -->
        <footer class="bg-secondary text-center mt-4 py-4">
            <a href="#" class="text-white"><b>Atención al cliente</b> - Grierson Cecilia Boulevard 787, Ciudad Autónoma de Buenos Aires (1107) - Argentina</a>
        </footer><!-- FOOTER -->

    </div><!-- CONTAINER -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>