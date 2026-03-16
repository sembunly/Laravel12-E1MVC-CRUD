<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'pob' => 'required',
            'address' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'note' => 'nullable'
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('students', 'public');
        }

        Student::create($validated);

        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
    return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'gender'  => ['required', 'string', 'max:20'],
            'phone'   => ['required', 'string', 'max:20'],
            'email'   => ['required', 'email', 'max:255'],
            'dob'     => ['required', 'date'],
            'pob'     => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'photo'   => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'note'    => ['nullable', 'string'],
        ]);

        if ($request->hasFile('photo')) {
            if ($student->photo && Storage::disk('public')->exists($student->photo)) {
                Storage::disk('public')->delete($student->photo);
            }

            $validated['photo'] = $request->file('photo')->store('students', 'public');
        }

        $student->update($validated);

        return redirect('/student/' . $student->id);
    }

    public function destroy(Student $student)
    {
        if ($student->photo && Storage::disk('public')->exists($student->photo)) {
            Storage::disk('public')->delete($student->photo);
        }

        $student->delete();

        return redirect('/student');
    }
}
