<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container bg-warning">
        <h1 style="text-align: center">liste Products</h1>
        <a href="/product/create" class="btn btn-primary " title="Create Product">Create New Products</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Unit Price</th>
                    <th>Image URL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                
                
                    <tr>
                        <td><img src="{{ $product->url_images }}" alt="img" width="80px"></td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->unit_price }}</td>
                        <td>{{ $product->url_images }}</td>
                    
                    
                        <td>
                            <a href="/product/{{$product->id}}/edit" class="btn btn-success">Edit</a>
                            
                            
                        </td>
                        {{-- <td><a href="/product/{id}" class="btn btn-info btn-sm">Show</a></td> --}}
                       {{-- <td><a href="/product/{{$product->id}}" class="btn btn-info">Show</a></td>  --}}

                        <td>
                            <form action="/product/{{$product->id}}" method="POST">
                                @csrf
                               


                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
