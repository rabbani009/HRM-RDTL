<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_attendance_entries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'attend_date',
        'intime',
        'outtime',
        'late_status',
        'total_duty',
    ];
}
