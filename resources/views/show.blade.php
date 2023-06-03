<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       
</head>

<body>
    <section class="h-100 h-custom bg-success">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                             @guest
        @if (Route::has('login'))
            
                <a class="nav-link" href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>                                                        <i class="bi bi-person"></i>
                    {{ __('Login') }}</svg>                                                        <i class="bi bi-person"></i>
                </a>

   
        @endif
    @else
        
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
        
    @endguest
                                            <h3 class="fw-bold mb-0 text-warning">My Cart</h3>
                                            <h6 class="mb-0  text-warning">You have {{ $countP }} items</h6>
                                        </div>

                                        <hr class="my-4">
                                        @foreach ($grains as $key => $grain)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ $grain['url_images'] }}" class="card-img-top"
                                                        alt="...">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Product</h6>
                                                    <hr class="my-4">
                                                    <h6 class="text-black mb-0">{{ $grain['name_produit'] }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <input id="form1" min="0" name="quantity" value="1"
                                                        type="number" class="form-control form-control-sm" />
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">{{ $grain['unit_price'] }} MAD</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i
                                                            class="fas fa-times"></i></a>
                                                    <a href="/dess/id-{{ $grain['id'] }}"
                                                        class="btn btn-outline-danger"
                                                        title="Retirer le produit du panier">Delete<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                          </svg><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">
                                        @endforeach

                                        <div class="pt-5" style=" btn-group dropleft text-align: center">

                                            <a type="button" class="btn btn-outline-success " href="/phosphat"><- Back to
                                                Shop</a>
                                            <a href="/vider" class="btn btn-outline-danger ">Delete All Product -><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                              </svg><i class="bi bi-trash"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-warning">
                                    <div class="p-5  " >
                                        <h3 class="fw-bold mb-5 text-center ">Summary</h3>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase" id="Items">Product -> {{ $countP }}
                                            </h5>
                                            <h5 id="totalPrice">MAD</h5>
                                        </div>
                                        <h5 class="text-uppercase mb-3" value="30" id="Shipping">Shipping : 30.00 MAD</h5>
                                        <div class="mb-4 pb-2">
                                            <hr class="my-4">
                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Total price</h5>
                                                <h5 id="PriceShipping">0 MAD</h5>
                                            </div>
                                            <button type="button"
                                                class="btn btn-secondary text-warning text-center  btn-block btn-lg"
                                                data-mdb-ripple-color="dark" href="">   Payement   </button>
                                        </div>
                                        <div>
                                          
                                        </div>

                                    </div>

                                </div>


                                <script>
                                    // Wait for the DOM to load
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Get all the product rows
                                        const products = document.querySelectorAll(".row.mb-4");

                                        let totalItems = 0;
                                        let totalPrice = 0;

                                        // Function to calculate the total price and update the HTML
                                        function calculateTotalPrice() {
                                            totalItems = 0;
                                            totalPrice = 0;

                                            // Iterate through each product row
                                            products.forEach(function(product) {
                                                // Get the quantity and unit price elements
                                                const quantityInput = product.querySelector("input[name='quantity']");
                                                const unitPriceElement = product.querySelector(
                                                    ".col-md-3.col-lg-2.col-xl-2.offset-lg-1 h6");

                                                // Parse the quantity and unit price values
                                                const quantity = parseInt(quantityInput.value);
                                                const unitPrice = parseFloat(unitPriceElement.textContent.replace("MAD", "").trim());

                                                // Update the total items and total price
                                                totalItems += quantity;
                                                totalPrice += quantity * unitPrice;
                                            });

                                            // Update the total price in the HTML
                                            const totalPriceElement = document.getElementById("totalPrice");
                                            totalPriceElement.innerHTML = "MAD " + totalPrice.toFixed(2);
                                        }

                                        // Add event listeners to the quantity input elements
                                        products.forEach(function(product) {
                                            const quantityInput = product.querySelector("input[name='quantity']");
                                            quantityInput.addEventListener("input", calculateTotalPrice);
                                        });

                                        // Initial calculation of the total price
                                        calculateTotalPrice();

                                    });
                                </script>




                                <style>
                                    @media (min-width: 1025px) {
                                        .h-custom {
                                            height: 100vh !important;
                                        }
                                    }

                                    .card-registration .select-input.form-control[readonly]:not([disabled]) {
                                        font-size: 1rem;
                                        line-height: 2.15;
                                        padding-left: .75em;
                                        padding-right: .75em;
                                    }

                                    .card-registration .select-arrow {
                                        top: 13px;
                                    }

                                    .bg-grey {
                                        background-color: #eae8e8;
                                    }

                                    @media (min-width: 992px) {
                                        .card-registration-2 .bg-grey {
                                            border-top-right-radius: 16px;
                                            border-bottom-right-radius: 16px;
                                        }
                                    }

                                    @media (max-width: 991px) {
                                        .card-registration-2 .bg-grey {
                                            border-bottom-left-radius: 16px;
                                            border-bottom-right-radius: 16px;
                                        }
                                    }
                                </style>
    </section>
</body>

</html>
