@extends('layout')

@section('content')

<h2>Add New Product</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="text" name="price" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Save Product
    </button>
</form>

@endsection
