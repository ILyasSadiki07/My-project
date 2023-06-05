    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create Product</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name_product">Product Name</label>
                                    <input type="text" name="name_product" class="form-control" value="{{ old('name_product') }}" required>
                                    @error('name_product')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="unit_price">Unit Price</label>
                                    <input type="number" name="unit_price" placeholder="Price MAD" class="form-control" required>
                                    @error('unit_price')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="photo">Product Photo</label>
                                    <input type="text" name="photo" id="photo" class="form-control" required>
                                    @error('photo')
                                        <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">Create</button>
                                    <a href="/product" class="btn btn-primary">Reset</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
