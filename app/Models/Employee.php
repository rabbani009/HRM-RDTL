<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'office',
        'department',
        'employee_name',
        'employee_id',
        'gender',
        'email',
        'date_of_birth',
        'join_date',
        'sallary',
        'contact_number',
        'employee_status',
        'designation',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by'
    ];

        protected $dates = ['created_at', 'updated_at'];

        public function createdBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo('App\Models\User', 'created_by', 'id');
        }

        public function updatedBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo('App\Models\User', 'updated_by', 'id');
        }

        public function getOffice()
        {
            return $this->belongsTo(Office::class, 'office');
        }

        public function getDepartment()
        {
            return $this->belongsTo(Department::class, 'department');
        }

        protected $cast =[

            'gender'=>'boolean',
        ];



}
