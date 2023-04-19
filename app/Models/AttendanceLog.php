<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceLog extends Model
{
    use HasFactory;
    // protected $guarded=[];


    protected $table = 'attendance_logs';

    protected $fillable = [
        'attend_date',
        'user_id',
        'intime',
        'outtime',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(UserInfo::class);
    }
}
