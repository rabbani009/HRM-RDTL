<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Carbon\Carbon;

class ReportController extends Controller
{
    
    public function index(){

        $commons['page_title'] = 'Monthly Attendence Report';
        $commons['content_title'] = 'Show Attendence';
        $commons['main_menu'] = 'Reports';
        $commons['current_menu'] = 'reports_employees';

        $emp = Employee::where('status', 1)->with(['createdBy', 'updatedBy'])->get();

        $employees = DB::table('employee_attendance_entries')
        ->orderBy('name', 'asc')
        ->paginate(31);


            return view('backend.pages.report.show',
            compact(
                'commons',
                'employees',
                'emp'
            
            )
        );

    }


    public function generateReport(Request $request)
{
    $commons['page_title'] = 'Monthly Attendence Report';
    $commons['content_title'] = 'Show Attendence';
    $commons['main_menu'] = 'Reports';
    $commons['current_menu'] = 'reports_employees';

    // dd($request->all());
    $startDate = Carbon::parse($request->input('start_date'));
    // dd($startDate);
    $endDate = Carbon::parse($request->input('end_date'));
    $employeeName = $request->input('employee_name');
    // dd($employeeName);

    $dateRange = Carbon::parse($startDate)->range($endDate)->toArray();
    // dd($dateRange);

    $reportData= [];

    foreach ($dateRange as $date) {
        $attendance = DB::table('employee_attendance_entries')
            ->where('name', $employeeName)
            ->whereDate('attend_date', $date)
            ->first();

        $data = [
            'date' => $date->format('Y-m-d'),
            'employee_name' => $employeeName,
            'status' => $attendance ? 'Present' : 'Absent',
            'intime' => $attendance ? $attendance->intime : '-',
            'outtime' => $attendance ? $attendance->outtime : '-',
            'late_status' => $attendance ? $attendance->late_status : '-',
            'total_duty' => $attendance ? $attendance->total_duty : '-',
            'is_friday' => $date->isFriday(),
        ];

        $reportData[] = $data;
    }

    return view('backend.pages.report.print', [
   
        'reportData' => $reportData,
        'commons' => $commons,
       
    ]);
}









}
