@extends('layouts.template')
@section('title', 'Dashboard')

@section('body')
<div class="container mt-4">
    <h1 class="mb-4 text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #5a5a5a;">Dashboard Product</h1>

    @php
        $totalQuantity = \App\Models\product::sum('quantity');
        $totalRetailPrice = \App\Models\product::sum('retail_price');
        $topProduct = \App\Models\product::orderBy('quantity', 'desc')->first();
    @endphp

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg rounded futuristic-card">
                <div class="card-header" style="background-color: #a7d3e0; border-radius: 0.5rem 0.5rem 0 0;">
                    <h5 class="mb-0 text-dark">Total Quantity</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: bold; font-size: 3rem;">{{$totalQuantity }}</h2>
                    <p class="card-text text-muted">Total jumlah stok</p>
                </div>
            </div>
            <br>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-lg rounded futuristic-card">
                <div class="card-header" style="background-color: #f2d5b4; border-radius: 0.5rem 0.5rem 0 0;">
                    <h5 class="mb-0 text-dark">Total Retail Price</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: bold; font-size: 3rem;">Rp. {{ number_format($totalRetailPrice, 2) }}</h2>
                    <p class="card-text text-muted">Total nilai jual satuan (Retail price).</p>
                </div>
            </div>
            <br>
        </div>

        <div class="row-mb-4">
            <div class="card border-0 shadow-lg rounded futuristic-card">
                <div class="card-header" style="background-color: #c6e1f0; border-radius: 0.5rem 0.5rem 0 0;">
                    <h5 class="mb-0 text-dark">Produk Teratas</h5>
                </div>
                <div class="card-body">
                    @if($topProduct)
                        <h2 class="card-title" style="font-weight: bold; font-size: 2rem;">{{ $topProduct->product_name }}</h2>
                        <p class="card-text text-muted">Quantity: {{ $topProduct->quantity }}</p>
                    @else
                        <p class="card-text text-muted">Belum ada produk.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4 text-center">
        <a href="{{ route('products.index') }}" class="btn btn-light btn-lg" style="border-radius: 25px;">Lihat Data Produk</a>
    </div>
</div>

<style>
    .futuristic-card {
        background: #ffffff;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .futuristic-card:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2),
                    0 0 30px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    h2 {
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
</style>

@endsection
