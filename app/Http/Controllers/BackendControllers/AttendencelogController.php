<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\AttendanceLog;



class AttendencelogController extends Controller
{
//     public function index(){

      
//             // Retrieve data from the check_times and userinfos tables
//             // $attendances = DB::table('check_times')
//             //                 ->join('user_infos', 'check_times.user_id', '=', 'user_infos.user_id')
//             //                 ->select('check_times.check_time', 'user_infos.user_id', 'user_infos.name')
//             //                 ->paginate(500);

//             $attendances = DB::table('check_times')
//                 ->join('user_infos', 'check_times.user_id', '=', 'user_infos.user_id')
//                 ->select('check_times.check_time', 'user_infos.user_id', 'user_infos.name')
//                 ->paginate(500);
  

//             // dd($attendances);
        
// // Group the attendances by date
// $attendanceByDate = [];

// foreach ($attendances as $attendance) {
//     $attendance_date = date('Y-m-d', strtotime($attendance->check_time));
    
//     if (!isset($attendanceByDate[$attendance_date])) {
//         $attendanceByDate[$attendance_date] = [
//             'attend_date' => $attendance_date,
//             'user_id' => $attendance->user_id,
//             'intime' => null,
//             'outtime' => null,
//         ];
//     }
    
//     $attendance_time = date('H:i:s', strtotime($attendance->check_time));

//     if (strtotime($attendance->check_time) < strtotime($attendanceByDate[$attendance_date]['intime'])
//         || $attendanceByDate[$attendance_date]['intime'] === null) {
//         $attendanceByDate[$attendance_date]['intime'] = $attendance_time;
//     }
    
//     if (strtotime($attendance->check_time) > strtotime($attendanceByDate[$attendance_date]['outtime'])
//         || $attendanceByDate[$attendance_date]['outtime'] === null) {
//         $attendanceByDate[$attendance_date]['outtime'] = $attendance_time;
//     }
// }

// // Insert data into the attendance_logs table
// foreach ($attendanceByDate as $attendance) {
//     DB::table('attendance_logs')->insert([
//         'attend_date' => $attendance['attend_date'],
//         'user_id' => $attendance['user_id'],
//         'intime' => $attendance['intime'],
//         'outtime' => $attendance['outtime'],
//         'created_at' => now(),
//         'updated_at' => now(),
//     ]);
// }

// return 'Attendance data inserted successfully.';
        

//     }



public function index()
{
    // $checkTimes = DB::table('check_times')->get();
    // $userInfos = DB::table('user_infos')->get();

    // $attendanceByDate = [];

    // foreach ($checkTimes as $checkTime) {
    //     $attendance_date = date('Y-m-d', strtotime($checkTime->check_time));

    //     if (!isset($attendanceByDate[$attendance_date])) {
    //         $attendanceByDate[$attendance_date] = [
    //             'attend_date' => $attendance_date,
    //             'user_id' => $checkTime->user_id,
    //             'intime' => null,
    //             'outtime' => null,
    //         ];
    //     }

    //     $attendance_time = date('h:i A', strtotime($checkTime->check_time));

    //     if (strtotime($checkTime->check_time) < strtotime($attendanceByDate[$attendance_date]['intime'])
    //         || $attendanceByDate[$attendance_date]['intime'] === null) {
    //         $attendanceByDate[$attendance_date]['intime'] = $attendance_time;
    //     }

    //     if (strtotime($checkTime->check_time) > strtotime($attendanceByDate[$attendance_date]['outtime'])
    //         || $attendanceByDate[$attendance_date]['outtime'] === null) {
    //         $attendanceByDate[$attendance_date]['outtime'] = $attendance_time;
    //     }
    // }

    // foreach ($attendanceByDate as $attendance) {
    //     AttendanceLog::create([
    //         'attend_date' => $attendance['attend_date'],
    //         'user_id' => $attendance['user_id'],
    //         'intime' => $attendance['intime'],
    //         'outtime' => $attendance['outtime'],
    //     ]);
    // }

    // return redirect()->back();


    // Retrieve data from the check_times and user_infos tables
    
        $attendances = DB::table('check_times')
        ->join('user_infos', 'check_times.user_id', '=', 'user_infos.user_id')
        ->select('check_times.check_time', 'user_infos.user_id', 'user_infos.name')
        ->get();

     // Insert data into the attendances table
     foreach ($attendances as $attendance) {
        $attendance_date = date('Y-m-d', strtotime($attendance->check_time));
        // dd($attendance_date);
        $intime = date('h:i A', strtotime($attendance->check_time));
        
        // dd($intime);
        $outtime = date('h:i A', strtotime($attendance->check_time));
        // dd($outtime);

        DB::table('attendance_logs')->insert([
            'attend_date' => $attendance_date,
            'user_id' => $attendance->user_id,
            'intime' => $intime,
            'outtime' => $outtime,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return 'Attendance data inserted successfully.';

}



}
