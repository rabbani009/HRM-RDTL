<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckTime extends Model
{
    protected $fillable = ['user_id', 'check_time'];
}
