<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AttendanceHelper;

class EmployeeAttendenceController extends Controller
{
    public function index()
    {
        // echo "Employee Attendance entries created successfully";
        // dd('print');
        $entries = DB::table('employees')
                    ->join('attendance_logs', 'employees.user_id', '=', 'attendance_logs.user_id')
                    ->select('employees.name', 'attendance_logs.attend_date', 'attendance_logs.intime', 'attendance_logs.outtime')
                    ->get();
            // dd($entries);

    
            foreach ($entries as $entry) {
                $employee_name = $entry->name ?? "Employee Name Not Found"; // If employee name not found in 
                $late_status = AttendanceHelper::calculateLateStatus($entry->intime);
            
                $total_duty = AttendanceHelper::calculateTotalDuty($entry->intime, $entry->outtime);
            
                // check if the entry already exists
                $existing_entry = DB::table('employee_attendance_entries')
                    ->where('name', $employee_name)
                    ->where('attend_date', $entry->attend_date)
                    ->where('intime', $entry->intime)
                    ->first();
            
                // insert the entry only if it does not exist
                if (!$existing_entry) {
                    DB::table('employee_attendance_entries')->insert([
                        'name' => $employee_name,
                        'attend_date' => $entry->attend_date,
                        'intime' => $entry->intime,
                        'outtime' => $entry->outtime,
                        'late_status' => $late_status,
                        'total_duty' => $total_duty,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
            
            // return "Employee Attendance entries Generated successfully";

            return redirect()
            ->route('attendance.show')
            ->with('success', 'Employee Attendance entries Generated successfully');
            
}

    public function show(){

        $commons['page_title'] = 'Employees Attendence Details';
        $commons['content_title'] = 'Show Employees';
        $commons['main_menu'] = 'Employees';
        $commons['current_menu'] = 'office_employees';

        $employees = DB::table('employee_attendance_entries')
        ->orderBy('name', 'asc')
        ->paginate(18);


            return view('backend.pages.employee_attendence.show',
            compact(
                'commons',
                'employees',
            
            )
        );


    }












}
