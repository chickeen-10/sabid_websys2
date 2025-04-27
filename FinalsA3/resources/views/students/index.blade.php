@extends('layouts.app')

@section('content')
    <h1>Student List</h1>

    <form action="{{ route('students.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search students..." class="form-control" />
    </form>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->year }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('students.show', $student) }}" class="btn btn-success btn-sm">View QR</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $students->links() }}
@endsection
