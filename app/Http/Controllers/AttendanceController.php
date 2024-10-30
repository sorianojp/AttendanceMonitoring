<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::whereHas('student.user', function ($query) {
            $query->where('id', Auth::id());
        })->get();
        return view('attendances.index', compact('attendances'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'student_no' => 'required|string|exists:students,student_no',
        ]);

        $student = Student::where('student_no', $request->student_no)->first();
        $lastRecord = Attendance::where('student_id', $student->id)->whereDate('entry_time', now())->latest()->first();
        if ($lastRecord && $lastRecord->status === 'In' && is_null($lastRecord->exit_time)) {
            $lastRecord->update([
                'exit_time' => now(),
                'status' => 'Out',
            ]);
        } else {
            Attendance::create([
                'student_id' => $student->id,
                'entry_time' => now(),
                'status' => 'In',
            ]);
        }
        return redirect()->back()->with('status', 'Attendance recorded successfully.');
    }
}
