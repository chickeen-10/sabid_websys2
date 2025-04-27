@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" value="{{ old('student_id', $student->student_id) }}" required>
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ old('course', $student->course) }}" required>
        </div>

        <div class="mb-3">
            <label>Year</label>
            <input type="text" name="year" class="form-control" value="{{ old('year', $student->year) }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
@endsection
