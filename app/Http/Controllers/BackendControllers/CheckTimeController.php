<?php
namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CheckTime;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CheckTimeImport;

class CheckTimeController extends Controller
{
    public function index()
    {
        return view('backend.pages.checktime.index');
    }

//     public function store(Request $request)
//     {
//         $startDate = date('Y-m-d', strtotime($request->input('start_date')));
//         $endDate = date('Y-m-d', strtotime($request->input('end_date')));

// // dd( $startDate);
//         $file = $request->file('file');
        
//         // $import = new CheckTimeImport;
//         $import = new CheckTimeImport($startDate, $endDate);
//         Excel::import($import, $file);
//         // dd($file);
//         $rows = $import->getRowCount();
//         // dd( $rows);
//         $imported_data = $import->getData();
//         //  dd( $imported_data);
//         foreach ($imported_data as $data) {
//             CheckTime::create($data);
//         }

//         return redirect()->route('checktime.index')->with('success', 'Imported ' . $rows . ' rows.');
//     }


// public function store(Request $request)
// {
//     $startDate = date('Y-m-d', strtotime($request->input('start_date')));
//     $endDate = date('Y-m-d', strtotime($request->input('end_date')));

//     $file = $request->file('file');
        
//     $import = new CheckTimeImport($startDate, $endDate);
//     Excel::import($import, $file);
        
//     $rows = $import->getRowCount();
//     $imported_data = $import->getData();
//     // dd($imported_data);
//     $imported_rows = 0;

//     foreach ($imported_data as $data) {
//         $checkTime = \DateTime::createFromFormat('Y-m-d H:i:s', $data['check_time']);
//         if ($checkTime >= $startDate && $checkTime <= $endDate) {
//             CheckTime::create($data);
//             $imported_rows++;
//         }
//     }

//     return redirect()->route('checktime.index')->with('success', 'Imported ' . $imported_rows . ' out of ' . $rows . ' rows.');
// }


public function store(Request $request)
{
    // Convert input dates to Y-m-d format
    $startDate = date('Y-m-d', strtotime($request->input('start_date')));
    $endDate = date('Y-m-d', strtotime($request->input('end_date')));

    // Get the uploaded file
    $file = $request->file('file');
    
    // Create a new CheckTimeImport object with the date range filter
    $import = new CheckTimeImport($startDate, $endDate);

    // Import the file using the Excel facade
    Excel::import($import, $file);
    
    // Get the imported data that passed the date range filter
    $imported_data = $import->getData();

    // dd( $imported_data);
    
    // Loop through the imported data and create CheckTime models
    foreach ($imported_data as $data) {
        CheckTime::create($data);
    }

    // Get the total number of imported rows
    $rows = $import->getRowCount();

    // Redirect back to the index page with a success message
    return redirect()->route('checktime.index')->with('success', 'Imported ' . $rows . ' rows.');
}










}
