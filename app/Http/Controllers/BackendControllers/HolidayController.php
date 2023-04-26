<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HolidayStoreRequest;

class HolidayController extends Controller
{
    public function index()
    {
        $commons['page_title'] = 'Holiday List';
        $commons['content_title'] = 'Holiday List';
        $commons['main_menu'] = 'Holiday List';
        $commons['current_menu'] = 'holiday list';

        $holidays = Holiday::where('status',1)->with(['createdBy','updatedBy'])->paginate(10);
        return view('backend.pages.holiday.index',compact('commons','holidays'));
    }
    public function create()
    {
        $commons['page_title'] = 'Add Holiday';
        $commons['content_title'] = 'Add Holiday';
        $commons['main_menu'] = 'Add Holiday';
        $commons['current_menu'] = 'holiday';

        $holidays = Holiday::where('status',1)->with(['createdBy','updatedBy'])->paginate(10);
        return view('backend.pages.holiday.create',compact('commons','holidays'));
    }
    public function store(HolidayStoreRequest $request)
    {

        $data = new Holiday();
        $data->holiday_name = $request->holiday_name;
        $data->holiday_date = $request->holiday_date;
        $data->status = 1;
        $data->created_at = Carbon::now();
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()
        ->route('holiday.create')
        ->with('success', 'Holiday added successfully!');
    }

}
