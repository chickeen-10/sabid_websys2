<div class="mb-3">
    <label>Student ID</label>
    <input type="text" name="student_id" value="{{ old('student_id', $student->student_id ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Course</label>
    <input type="text" name="course" value="{{ old('course', $student->course ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Year</label>
    <input type="text" name="year" value="{{ old('year', $student->year ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" class="form-control" required>
</div>
