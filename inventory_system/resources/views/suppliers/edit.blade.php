@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('content')
<div class="container">
    <h2>Edit Supplier</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Supplier Name</label>
            <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Supplier</button>
    </form>
</div>
@endsection
