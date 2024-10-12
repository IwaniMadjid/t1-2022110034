@extends('layouts.template')

@section('title', 'Create New Product')

@section('body')

<div class="container mt-4">
    <h3 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #5a5a5a;">Create New Product</h3>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow">
        @csrf

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>ID:</label>
            <input type="text" name="id" required class="form-control @error('id') is-invalid @enderror" placeholder="Enter Product ID">
            @error('id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Nama Product:</label>
            <input type="text" name="product_name" required class="form-control @error('product_name') is-invalid @enderror" placeholder="Enter Product Name">
            @error('product_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Harga Eceran:</label>
            <input type="number" name="retail_price" required class="form-control @error('retail_price') is-invalid @enderror" placeholder="Enter Retail Price">
            @error('retail_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Harga Grosir:</label>
            <input type="number" name="wholesale_price" required class="form-control @error('wholesale_price') is-invalid @enderror" placeholder="Enter Wholesale Price">
            @error('wholesale_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Negara Pembuat:</label>
            <input type="text" name="origin" required class="form-control @error('origin') is-invalid @enderror" placeholder="Enter Country of Origin">
            @error('origin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Quantity:</label>
            <input type="number" name="quantity" required class="form-control @error('quantity') is-invalid @enderror" placeholder="Enter Quantity">
            @error('quantity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3"> <!-- Added mb-3 for margin bottom -->
            <label>Image:</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success btn-lg w-100" style="border-radius: 25px;">Save</button>
    </form>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }

    .form-control {
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #5a5a5a;
        box-shadow: 0 0 5px rgba(90, 90, 90, 0.5);
    }

    h2 {
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
        background-color: #4CAF50;
        border: none;
    }

    .btn-success:hover {
        background-color: #45a049;
    }
</style>

@endsection
