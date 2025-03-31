@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>

        <!-- Read-only Category -->
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" value="{{ $product->category->name ?? 'No Category' }}" readonly>
        </div>

        <!-- Read-only Supplier -->
        <div class="mb-3">
            <label class="form-label">Supplier</label>
            <input type="text" class="form-control" value="{{ $product->supplier->name ?? 'No Supplier' }}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
