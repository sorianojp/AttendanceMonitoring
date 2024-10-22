<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['student_id', 'entry_time', 'exit_time', 'status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
