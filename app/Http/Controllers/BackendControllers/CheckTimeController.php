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

    public function store(Request $request)
    {
        
        $file = $request->file('file');
        
        $import = new CheckTimeImport;
        Excel::import($import, $file);
        
        $rows = $import->getRowCount();
        $imported_data = $import->getData();
        
        foreach ($imported_data as $data) {
            CheckTime::create($data);
        }

        return redirect()->route('checktime.index')->with('success', 'Imported ' . $rows . ' rows.');
    }
}
