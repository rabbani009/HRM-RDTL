<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserChecktime;
use Carbon\Carbon;

class UserChecktimeController extends Controller
{


    public function csvview(){

        return view('backend.pages.attendence.view');
        
    }




    public function import(Request $request)
    // {
    //     // dd($request->all());
    //     $startDate = $request->input('start_date');
    //     $endDate = $request->input('end_date');

    //     $file = $request->file('file');
    //     $path = $file->getRealPath();

    //     $csv = array_map('str_getcsv', file($path));

    //     $data = array_slice($csv, 1); // remove header row

    //     $chunks = array_chunk($data, 1000); // process 1000 rows at a time

    //     foreach ($chunks as $chunk) {
    //         $rows = [];

    //         foreach ($chunk as $row) {
    //             $rows[] = [    
    //                 'USERID' => $row[0],
    //                 'CHECKTIME' => $row[1],
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ];
    //         }

    //         UserChecktime::insert($rows);
    //     }

    //     return redirect()->back()->with('success', 'CSV imported successfully.');
    // }
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $file = $request->file('file');
        $path = $file->getRealPath();

        $csv = array_map('str_getcsv', file($path));

        $data = array_slice($csv, 1); // remove header row

        $filteredData = array_filter($data, function ($row) use ($startDate, $endDate) {
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $row[1])->toDateString();
            return $date >= $startDate && $date <= $endDate;
        });

        $chunks = array_chunk($filteredData, 1000); // process 1000 rows at a time

        foreach ($chunks as $chunk) {
            $rows = [];

            foreach ($chunk as $row) {
                $rows[] = [
                    'USERID' => $row[0],
                    'CHECKTIME' => $row[1],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            UserChecktime::insert($rows);
        }

        return redirect()->back()->with('success', 'CSV imported successfully.');
    }




















}
