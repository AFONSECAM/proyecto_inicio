<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
    #opcion:hover {
        transform: scale(1.1);
        transition: .3s;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav list-inline mt-2 mr-3 mt-lg-0">
                    <li class="list-inline-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Quienes somos</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    @guest
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                    </li>
                    @endif
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                    </li>
                    @endif


                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <!-- End Navbar -->



        <!-- Listado mejores productos 1 -->
        <div class="row">
            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="https://www.alkosto.com/medias/840023215414-001-310Wx310H?context=bWFzdGVyfGltYWdlc3wzNjAzNnxpbWFnZS9qcGVnfGltYWdlcy9oOWMvaDA0LzEwNTUyODAwMTQ5NTM0LmpwZ3w3YmEzNGI1ZTE1ZWJlYTYxMTRlODE0Y2UzYzJmMmI0ZDAxZjg2NGNkNzJhM2IzMTkyMTgzYWJiNzI2MzJjYzFh"
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Celular MOTOROLA G20 64GB Azul</h5>
                    <p class="card-text">$649.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="https://www.alkosto.com/medias/8806090795787-001-310Wx310H?context=bWFzdGVyfGltYWdlc3w1NTU2NnxpbWFnZS9qcGVnfGltYWdlcy9oZjYvaGFhLzk5MTAzNjQ2MDIzOTguanBnfDE0NGViN2ZhODYxMzM4NjcyYWQ2YzJjYjRmNDkwNjg1ZDI1MTU4YWRlNzc5MTQ5OTcyZTU4MmZmNWJlMDcwNTM"
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Celular SAMSUNG Galaxy A21S-128 GB Negro</h5>
                    <p class="card-text">$729.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="https://www.alkosto.com/medias/8806087044287-001-310Wx310H?context=bWFzdGVyfGltYWdlc3wyODk4OHxpbWFnZS9qcGVnfGltYWdlcy9oNWUvaGJiLzEwNTY1OTc3NDczMDU0LmpwZ3w4NjcwY2IyZWJlNTU0MGJhMjM3MjRkYTM3MjhiODhiNmY5NTA2MDI3YThmNTc1ODY0MjBjMTVkZGI4MzA5NzU0"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Celular LG K61 - 128GB Blanco</h5>
                    <p class="card-text">$999.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="https://www.alkosto.com/medias/6935117829746-001-310Wx310H?context=bWFzdGVyfGltYWdlc3wyOTg4NnxpbWFnZS9qcGVnfGltYWdlcy9oZWIvaDI4LzEwNDY0OTkwNDYxOTgyLmpwZ3wzNmI5Mzc0OTY1NjVlNmNiMmUzOTVkNDk4N2FmN2RhNTIxNTAyMGUwN2U3MDk1NTVjNThkOGViYTczMjljMjZh"
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Celular VIVO Y51 8GB+128GB Azul</h5>
                    <p class="card-text">$797.900</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>
        </div>


        <!-- End Listado mejores productos 2-->

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark mt-3">
        <div style="background-color: #6351ce;">
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center text-white">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Siguenos en nustras redes sociales!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a href="" class="fb-ic">
                            <i class="fab fa-facebook-f text-white mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="" class="tw-ic">
                            <i class="fab fa-twitter text-white mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="" class="gplus-ic">
                            <i class="fab fa-google-plus-g text-white mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="" class="li-ic">
                            <i class="fab fa-linkedin-in text-white mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="" class="ins-ic">
                            <i class="fab fa-instagram text-white"> </i>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 text-white">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Cell Shop</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                        amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="form_battery.php">Baterias</a>
                    </p>
                    <p>
                        <a href="formularios/form_screen_size.php">Tamaño de Pantalla</a>
                    </p>
                    <p>
                        <a href="#!">Servicio Remoto</a>
                    </p>
                    <p>
                        <a href="#!">Soporte técnico</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Enlaces útiles</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Mi cuenta</a>
                    </p>
                    <p>
                        <a href="#!">Registrarme</a>
                    </p>
                    <p>
                        <a href="#!">Tarifas de envío</a>
                    </p>
                    <p>
                        <a href="#!">Ayuda</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Bogotá, Calle 123&nbsp;#&nbsp;45-123 CO
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> celphone@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-mobile mr-3"></i> + 57 313 365 3643
                    </p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white py-3">© 2020 Copyright
            <a href="https://mdbootstrap.com/"> Grupo 3</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>