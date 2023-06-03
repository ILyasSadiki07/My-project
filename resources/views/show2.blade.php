@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between mb-4 ">
        <h3>Show Product</h3>
        

    </div>
   
    <div class="form-group text-centerx">
        <label>name_product</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name_product }}" >
    </div>
    <div class="form-group">
        <label>unit_price</label>
        <input type="number" name="number" class="form-control" value="{{ $product->unit_price }}" >
    </div>
    <div class="form-group">
        <label>url_images</label>
        <input type="text" name="weight" class="form-control" value="{{ $product->url_images }}" >
    </div>
    

@endsection