@extends('layouts.app')

@section('content')
    <link href="{{ asset('/pack/img/footer.png') }}" rel="icon">
    <style>
         .container {
            /* background-image: url('/pack/img/footer.png');
            /* Additional CSS styles for the container */
            /* Example styles: */
            /* background-size: cover;
            background-position: center;
            Add more styles as needed */ 
         } 
        .masthead-subheading {
            /* Additional CSS styles for the subheading */
            /* Example styles: */
            color:#fbaa1f;
            font-size: 24px;
            text-align: center;
            /* Add more styles as needed */
        }
        .masthead-heading {
            /* Additional CSS styles for the heading */
            /* Example styles: */
            color: #00b92e;
            font-size: 48px;
            /* Add more styles as needed */
        }
        
    </style>
    
    <div class="container">
        <div class="masthead-subheading">Welcome To Commande Table  !</div>
        <div class="masthead-heading text-uppercase">Congratulations, your request has been accepted </div>
        <a class="btn btn-success btn-xl text-uppercase" href="/phosphat">Add_Auther_Product</a>
    </div>
@endsection

