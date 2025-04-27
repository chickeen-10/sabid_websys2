@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>

    <p>Student ID: {{ $student->student_id }}</p>
    <p>Name: {{ $student->name }}</p>
    <p>Course: {{ $student->course }}</p>
    <p>Year: {{ $student->year }}</p>
    <p>Email: {{ $student->email }}</p>

    <!-- Display QR Code -->
    <div>{!! $qrcode !!}</div>

    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Back to Student List</a>
    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning mt-3">Edit</a>
    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Delete</button>
    </form>
@endsection
