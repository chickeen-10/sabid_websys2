<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonalInfoRequest; 

class PersonalInfoController extends Controller
{
    public function create()
    {
        return view('personal_info.form');
    }

    public function store(PersonalInfoRequest $request)
    {
        return back()->with('success', 'Form submitted successfully!');
    }
}
