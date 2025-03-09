<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function insertForm()
    {
        return view('stud_create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'stud_name' => 'required|string|max:255',
        ]);

        Student::create(['name' => $request->stud_name]);

        return redirect('/view-records')->with('success', 'Record inserted successfully');
    }

    public function index()
    {
        $students = Student::all();
        return view('stud_view', compact('students'));
    }
}
