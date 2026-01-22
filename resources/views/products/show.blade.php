@extends('layout')

@section('content')

<h2>Product Details</h2>

<div class="card">
    <div class="card-body">
        <h4>{{ $product->name }}</h4>

        <p>{{ $product->description }}</p>

        <strong>Price:</strong> {{ $product->price }}
    </div>
</div>

<a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">
    Back
</a>

@endsection
