<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OfficeStoreRequest;
use App\Http\Requests\OfficeUpdateRequest;
use App\Models\Office;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commons['page_title'] = 'Office';
        $commons['content_title'] = 'All office';
        $commons['main_menu'] = 'office';
        $commons['current_menu'] = 'office';

        $offices = Office::where('status', 1)->with(['createdBy', 'updatedBy'])->paginate(20);

        return view('backend.pages.office.show',
        compact(
            'commons',
            'offices'

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

        $commons['page_title'] = 'Office';
        $commons['content_title'] = 'Add new office';
        $commons['main_menu'] = 'office';
        $commons['current_menu'] = 'office_create';


        $offices = Office::where('status', 1)->with(['createdBy', 'updatedBy'])->paginate(20);

        return view('backend.pages.office.create',
        compact(
            'commons',
            'offices'

        )
    );










    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficeStoreRequest $request)
    {


        $office = new Office();
        $office->name = $request->validated('office_name');
        $office->slug = strtolower(str_replace(' ', '_', $request->validated('office_name')));
        $office->status = 1;
        $office->created_at = Carbon::now();
        $office->created_by = Auth::user()->id;
        $office->save();

        if ($office->wasRecentlyCreated){
            return redirect()
                ->route('office.index')
                ->with('success', 'Office created successfully!');
        }

        return redirect()
            ->back()
            ->with('failed', 'Try again !');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commons['page_title'] = 'Office';
        $commons['content_title'] = 'Show Office';
        $commons['main_menu'] = 'office';
        $commons['current_menu'] = 'office_show';


        $offices = Office::where('status', 1)->with(['createdBy', 'updatedBy'])->paginate(20);

        return view('backend.pages.office.show',
            compact(
                'commons',
                'office',

            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commons['page_title'] = 'Office';
        $commons['content_title'] = 'Edit Office';
        $commons['main_menu'] = 'office';
        $commons['current_menu'] = 'office_edit';

        $office = Office::findOrFail($id);
        $offices = Office::where('status', 1)->with(['createdBy', 'updatedBy'])->paginate(20);

        return view('backend.pages.office.edit',
            compact(
                'commons',
                'office',
                'offices'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfficeUpdateRequest $request, $id)
    {
        $office = Office::findOrFail($id);
        $office->name = $request->validated('office_name');
        $office->slug = strtolower(str_replace(' ', '_', $request->validated('office_name')));
        $office->status = $request->validated('status');
        $office->updated_at = Carbon::now();
        $office->updated_by = Auth::user()->id;
        $office->save();

        if ($office->getChanges()){
            return redirect()
                ->route('office.index')
                ->with('success', 'Office updated successfully!');
        }

        return redirect()
            ->back()
            ->with('failed', 'Office is not updated!');
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
