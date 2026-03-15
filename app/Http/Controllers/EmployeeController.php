<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
        public function index(){
        return view('employees.index', [
        'employees' => Employee::all()->sortByDesc('id')
        ]);
    }

        public function show(Employee $employee ){
        return view('employees.show', ['employee' => $employee]);
    }

        public function store(Employee $employee){
            request()->validate([
        'name' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required',
        'notes' => 'required'
    ]);

    Employee::create([
        'name' => request('name'),
        'gender' => request('gender'),
        'phone' => request('phone'),
        'email' => request('email'),
        'address' => request('address'),
        'notes' => request('notes'),
    ]);
    }

        public function create(){
        return view('employees.create');
    }

        public function edit(Employee $employee){
        return view('employees.edit', ['employee' => $employee]);
    }

        public function update(Employee $employee){
        request()->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'notes' => ['required'],
        ]);

        $employee->update([
            'name' => request('name'),
            'gender' => request('gender'),
            'phone' => request('phone'),
            'email' => request('email'),
            'address' => request('address'),
            'notes' => request('notes'),
        ]);

        return redirect('/employee/' . $employee->id);   }

        public function destroy(Employee $employee){
        $employee->delete();
        return redirect('/employee');
    
    }
}
