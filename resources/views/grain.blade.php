<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agro Vision</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('pack/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('pack/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('pack/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="{{ asset('pack/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="styleshet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+212641958679</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="/" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Agro</span> Vision</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Agro</span> Vision</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="/" class="nav-item nav-link ">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Service</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">product</a>
                    <div class="dropdown-menu m-0">
                        <a href="/grain" class="dropdown-item">Grain</a>
                        <a href="/hebibicid" class="dropdown-item">Herbicide</a>
                        <a href="/phosphat" class="dropdown-item">Phosphat</a>
                    </div>
                </div>

                <a href="/contact" class="nav-item nav-link">Contact</a>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </div>
            <div style="">
                <a href="/show"> <i class="fa badgee fa-lg" value="{{$countP}}" style="color: black">&#xf218;</i></a>

            </div>
        </div>
    </nav>


    <!-- Hero Start -->

    <!-- product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>


            <main>
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        @foreach ($grains as $grain)
                            <div class="col">
                                <div class="card h-100 shadow-sm">
                                    <img src="{{ asset($grain['url_images']) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="clearfix mb-3">
                                            <span
                                                class="float-start badge rounded-pill bg-primary">{{ $grain['name_product'] }}</span>
                                            <span class="float-end price-hp"
                                                style="color: green">{{ $grain['unit_price'] }} MAD;</span>
                                        </div>
                                        <h5 class="card-title">Article</h5>
                                        <div class="text-center my-4">
                                            <a href="/ajoutProduit/id-{{ $grain['id'] }}" class="btn btn-warning">ADD To Shopp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 

                    </div>

                </div>
            </main>

        </div>
        <style>
            .badgee:after {
                content: attr(value);
                font-size: 12px;
                color: #fff;
                background: red;
                border-radius: 50%;
                padding: 0 5px;
                position: relative;
                left: -8px;
                top: -10px;
                opacity: 0.9;
            }
        </style>

        <!-- product End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-footer bg-primary text-white mt-5">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-8 col-md-6">
                        <div class="row gx-5">
                            <div class="col-lg-4 col-md-12 pt-5 mb-5">

                                <div class="d-flex mb-2">
                                    <i class="bi bi-geo-alt text-white me-2"></i>
                                    <p class="text-white mb-0">Temara, Massira1</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-envelope-open text-white me-2"></i>
                                    <p class="text-white mb-0">AgroVision@gmail.com</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-telephone text-white me-2"></i>
                                    <p class="text-white mb-0">+212641958679</p>
                                </div>
                                <div class="d-flex mt-4">
                                    <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-square rounded-circle" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <h4 class="text-white mb-4">Quick Links</h4>
                                <div class="d-flex flex-column justify-content-start">
                                    <a class="text-white mb-2" href="/"><i
                                            class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                    <a class="text-white mb-2" href="/about"><i
                                            class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                    <a class="text-white mb-2" href="/service"><i
                                            class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                    <a class="text-white" href="/contact"><i
                                            class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <h4 class="text-white mb-4">Popular Links</h4>
                                <div class="d-flex flex-column justify-content-start">
                                    <a class="text-white mb-2" href="/grain"><i
                                            class="bi bi-arrow-right text-white me-2"></i>Grain</a>
                                    <a class="text-white mb-2" href="/hebibicid"><i
                                            class="bi bi-arrow-right text-white me-2"></i>herbicide</a>
                                    <a class="text-white mb-2" href="/phosphat"><i
                                            class="bi bi-arrow-right text-white me-2"></i>phosphat</a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-n5">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                            <h4 class="text-white">News

                            </h4>
                            <h6 class="text-white">Subscribe For reseved our news</h6>

                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3"
                                        placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white py-4">
            <div class="container text-center">
                <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Agro Vision </a>.Copright
                    2023 <a class="text-secondary fw-bold" href="https://htmlcodex.com"></a></p>
            </div>

        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('pack/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('pack/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('pack/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('pack/lib/owlcarousel/owl.carousel.js') }}"></script>


        <script src="{{ asset('pack/js/main.js') }}"></script>
</body>

</html>
