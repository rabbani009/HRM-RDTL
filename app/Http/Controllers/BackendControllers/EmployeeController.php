<?php

namespace App\Http\Controllers\BackendControllers;

use Carbon\Carbon;
use App\Models\Office;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commons['page_title'] = 'Employee List';
        $commons['content_title'] = 'Employee';
        $commons['main_menu'] = 'employee_index';
        $commons['current_menu'] = 'employee_index';

        $employee = Employee::where('status',1)
                    ->with(['getOffice', 'getDepartment', 'createdBy', 'updatedBy'])->paginate(6);
                    // dd($employee);

        return view('backend.pages.employee.index',
            compact(
                'commons',
                'employee',


            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commons['page_title'] = 'Employee';
        $commons['content_title'] = 'Add new Employee';
        $commons['main_menu'] = 'employee';
        $commons['current_menu'] = 'employee';

        $offices = Office::where('status', 1)
         ->pluck('name', 'id');

        // dd( $councils);

        $departments = Department::where('status', 1)->pluck('name', 'id');


        return view('backend.pages.employee.create',
            compact(
                'commons',
                'offices',
                'departments',

            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        $employee = new Employee();
        $employee->office = $request->validated('office');
        $employee->department = $request->validated('department');
        $employee->name = $request->validated('name');
        $employee->user_id = $request->validated('user_id');
        $employee->gender = $request->validated('gender');
        $employee->email = $request->validated('email');
        $employee->date_of_birth = $request->validated('date_of_birth');
        $employee->join_date = $request->validated('join_date');
        $employee->sallary = $request->validated('sallary');
        $employee->contact_number = $request->validated('contact_number');
        $employee->employee_status = $request->validated('employee_status');
        $employee->designation = $request->validated('designation');

        $employee->status = 1;
        $employee->created_at = Carbon::now();
        $employee->created_by = Auth::user()->id;
        $employee->save();

        // dd($employee);

        if ($employee->wasRecentlyCreated){
            return redirect()
                ->route('employee.index')
                ->with('success', 'Employee created successfully!');
        }

        return redirect()
            ->back()
            ->with('failed', 'Employee is not created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
