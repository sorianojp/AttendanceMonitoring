<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(User $user)
    {
        return view('students.index',compact('user'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'student_no' => 'required'
        ]);
        $user->students()->create($request->all());
        return redirect()->route('users.students.index', $user)
                        ->with('status','Student added successfully.');
    }
}
