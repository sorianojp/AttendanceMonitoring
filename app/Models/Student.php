<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['lastname', 'firstname', 'middlename', 'student_no'];

    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->lastname}, {$this->firstname} {$this->middlename}";
    }
}
