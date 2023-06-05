
    <link href="{{asset('pack/img/favicon.ico')}}" rel="icon">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="{{asset('pack/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    
    <link href="{{asset('pack/css/bootstrap.min.css')}}" rel="stylesheet">

    
    <link href="{{asset('pack/css/style.css')}}" rel="stylesheet">
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
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Agro</span> Vision</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-Gmail"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100093506641933"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.linkedin.com/in/ilyas-sadiki-54a039254/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Agro</span>  Vision</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
               
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">product</a>
                    <div class="dropdown-menu m-0">
                        <a href="grain.html" class="dropdown-item">Grain</a>
                        <a href="hebibicid.html" class="dropdown-item">Herbicide</a>
                        <a href="phosphat.html" class="dropdown-item">Phosphat</a>
                            </div>
                </div>
                
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a> --}}

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      @if (Auth()->user()->is_admin)
                        <a class="dropdown-item" href="{{ route('product') }}">
                         {{ __('Admin') }}
                     </a>
                     @endif
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        
                          
                        </form>
                    </div>
                </li>
            @endguest
            </div>
        </div>
    </nav>
    

<a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('pack/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('pack/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('pack/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('pack/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('pack/js/main.js')}}"></script>
