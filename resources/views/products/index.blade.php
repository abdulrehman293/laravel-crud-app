@extends('layout')

@section('content')

<h2 class="mb-3">Products</h2>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
    Add New Product
</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th width="250">Actions</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a
                    class="btn btn-info btn-sm"
                    href="{{ route('products.show', $product->id) }}"
                >
                    View
                </a>

                <a
                    class="btn btn-warning btn-sm"
                    href="{{ route('products.edit', $product->id) }}"
                >
                    Edit
                </a>

                <form
                    action="{{ route('products.destroy', $product->id) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm" type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $products->links() }}

@endsection
