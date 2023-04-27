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

public function index()
{

    // Retrieve data from the check_times and user_infos tables
        $commons['main_menu'] = 'Excel';
        $commons['current_menu'] = 'attendance';

        $attendances = DB::table('check_times')
        ->join('user_infos', 'check_times.user_id', '=', 'user_infos.user_id')
        ->select('check_times.check_time', 'user_infos.user_id', 'user_infos.name')
        ->get();

        // dd( $attendances);

     // Insert data into the attendances table

    foreach ($attendances as $attendance) {
        $attendance_date = date('Y-m-d', strtotime($attendance->check_time));
        $check = CheckTime::where('check_time', $attendance->check_time)
                    ->where('user_id', $attendance->user_id)
                    ->get();
        //dd($check);
        if($check->isEmpty()){
            dd($check);
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
            //dd($attendance_log,$check,$attendance_date,$attendance->check_time);
            if($attendance_log){

                $attendance_log_id = $attendance_log->id;
                if(!$attendance_log->intime){
                    DB::table('attendance_logs')
                        ->where('id', $attendance_log_id)
                        ->update(['intime' => date('h:i A', strtotime($attendance->check_time)), 'updated_at' => now()]);
                        dd("test");
                } else if(!$attendance_log->outtime){

                    $time = DB::table('check_times')
                    ->where('user_id',$attendance->user_id)
                    ->where('check_time','LIKE', '%'.$attendance_date.'%')
                    ->max('check_time');


                    DB::table('attendance_logs')
                        ->where('id', $attendance_log_id)
                        ->update(['outtime' => date('h:i A', strtotime($time)), 'updated_at' => now()]);
                }
            }
            else {
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

}


}
