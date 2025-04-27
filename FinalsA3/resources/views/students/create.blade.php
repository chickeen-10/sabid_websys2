@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Year</label>
            <input type="text" name="year" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
