@extends('layouts.app')

@section('title', 'Add Supplier')

@section('content')
<div class="container">
    <h2>Add Supplier</h2>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Supplier Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Supplier</button>
    </form>
        
</div>
@endsection
