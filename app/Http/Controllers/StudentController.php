<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students' => Student::all()->sortByDesc('id')]);
    }

    public function show(Student $student){
        return view('students.show', ['student' => $student]);
    }
}
