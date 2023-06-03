@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Product : {{$product->id}}</div>

                    <div class="card-body">
                        <form action="{{ route('index') }}" method="POST">
                            @csrf
                            @method('PUT')
                        
                            <div class="form-group">
                                <label for="name_product">Product Name</label>
                                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $product->name_product }}" required>
                            </div>
                        
                            {{-- <div class="form-group">
                                <label for="unit_price">Unit Price</label>
                                <input type="number" name="unit_price" id="unit_price" class="form-control" value="{{ $product->unit_price }}" required>
                            </div> --}}
                            <div class="form-group">
                                <label for="unit_price">Unit Price</label>
                                <input type="number" name="unit_price" class="form-control" value="{{ $product->unit_price }}" required>
                                @error('unit_price')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="url_images">Image URL</label>
                                <input type="text" name="url_images" id="url_images" class="form-control" value="{{ $product->url_images }}" required>
                            </div>
                        
                            <!-- Ajoutez d'autres champs au besoin -->
                        
                            <div class="pt-5" style=" btn-group dropleft text-align: center">

                                
                                <button type="submit" class="btn btn-outline-success">Update</button>
                                <a href="/product" class="btn btn-outline-danger ">Reset -></a>
                                    

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection