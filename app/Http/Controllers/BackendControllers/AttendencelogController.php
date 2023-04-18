<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\AttendanceLog;
use App\Models\CheckTime;



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
   
    // Retrieve data from the check_times and user_infos tables
    
        $attendances = DB::table('check_times')
        ->join('user_infos', 'check_times.user_id', '=', 'user_infos.user_id')
        ->select('check_times.check_time', 'user_infos.user_id', 'user_infos.name')
        ->get();

        // dd( $attendances);

     // Insert data into the attendances table

    //  foreach ($attendances as $attendance) {
    //     $attendance_date = date('Y-m-d', strtotime($attendance->check_time));
    //     $check = CheckTime::where('check_time', $attendance->check_time)
    //                 ->where('user_id',$attendance->user_id)
    //                 ->get();
    //     if($check->isEmpty()){
    //         DB::table('attendance_logs')->insert([
    //             'attend_date' => $attendance_date,
    //             'user_id' => $attendance->user_id,
    //             'intime' => date('h:i A', strtotime($attendance->check_time)),
    //             'outtime' => null,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    //     } else {
    //         $attendance_log = DB::table('attendance_logs')
    //                         ->where('user_id', $attendance->user_id)
    //                         ->where('attend_date', $attendance_date)
    //                         ->first();
    //         if($attendance_log){
    //             $attendance_log_id = $attendance_log->id;
    //             if(!$attendance_log->outtime){
    //                 DB::table('attendance_logs')
    //                     ->where('id', $attendance_log_id)
    //                     ->update(['outtime' => date('h:i A', strtotime($attendance->check_time)), 'updated_at' => now()]);
    //             }
    //         } else {
    //             DB::table('attendance_logs')->insert([
    //                 'attend_date' => $attendance_date,
    //                 'user_id' => $attendance->user_id,
    //                 'intime' => null,
    //                 'outtime' => date('h:i A', strtotime($attendance->check_time)),
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ]);
    //         }
    //     }
    // }

    foreach ($attendances as $attendance) {
        $attendance_date = date('Y-m-d', strtotime($attendance->check_time));
        $check = CheckTime::where('check_time', $attendance->check_time)
                    ->where('user_id', $attendance->user_id)
                    ->get();
        if($check->isEmpty()){
            DB::table('attendance_logs')->insert([
                'attend_date' => $attendance_date,
                'user_id' => $attendance->user_id,
                'intime' => date('h:i A', strtotime($attendance->check_time)),
                'outtime' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $attendance_log = DB::table('attendance_logs')
                            ->where('user_id', $attendance->user_id)
                            ->where('attend_date', $attendance_date)
                            ->first();
            if($attendance_log){
                $attendance_log_id = $attendance_log->id;
                if(!$attendance_log->intime){
                    DB::table('attendance_logs')
                        ->where('id', $attendance_log_id)
                        ->update(['intime' => date('h:i A', strtotime($attendance->check_time)), 'updated_at' => now()]);
                } else if(!$attendance_log->outtime){
                    DB::table('attendance_logs')
                        ->where('id', $attendance_log_id)
                        ->update(['outtime' => date('h:i A', strtotime($attendance->check_time)), 'updated_at' => now()]);
                }
            } else {
                DB::table('attendance_logs')->insert([
                    'attend_date' => $attendance_date,
                    'user_id' => $attendance->user_id,
                    'intime' => date('h:i A', strtotime($attendance->check_time)),
                    'outtime' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
    
    return 'Attendance data inserted successfully.';
    // $start = "2023-03-01";
    // $end = "2023-03-30";
    // for($i = $start;$i<=$end;$i++)
    // {
    //     echo $i."<br>";
    // }
    // echo $user_infos;

}


}
