@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container">
    <h2>Add Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Category</button>
    </form>
</div>
@endsection
