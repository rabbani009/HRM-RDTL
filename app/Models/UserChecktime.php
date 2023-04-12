<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChecktime extends Model
{
    use HasFactory;
    protected $fillable = ['CHECKTIME', 'USERID'];
}
