<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Holiday;
use Carbon\Carbon;
use PDF;

class ReportController extends Controller
{

    public function index(){

        $commons['page_title'] = 'Monthly Attendence Report';
        $commons['content_title'] = 'Show Attendence';
        $commons['main_menu'] = 'report';
        $commons['current_menu'] = 'report';

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


        public function generateReport(Request $request){

        $commons['page_title'] = 'Monthly Attendence Report';
        $commons['content_title'] = 'Show Attendence';
        $commons['main_menu'] = 'report';
        $commons['current_menu'] = 'report';

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

            $holiday = DB::table('holidays')
            ->where('status',1)
            ->where('holiday_date',$date)
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
                'holiday' => $holiday ? 'Holiday' : '-'
            ];

            $reportData[] = $data;
        }

        return view('backend.pages.report.print', [

            'reportData' => $reportData,
            'commons' => $commons,

        ]);
}

}
