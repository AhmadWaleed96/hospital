<?php

namespace App\Http\Controllers;

use App\Donor;
use App\TimeSchedule;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donor.list')
        ->with('donor', Donor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Donor::create([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'donornumber' => $request->donornumber,
            'blood_group' => $request->blood_group,
            'qty' => $request->qty,
            'hospital' => $request->hospital,
            'type' => 'donor'
        ]);

        // flash message
        session()->flash('success', 'تم إضافة المتبرع بنجاح.');
        // redirect user
        return redirect(route('donor.index'));
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor  $Donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        return view('donor.create')
        ->with('donor', $donor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $Donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $donor->update([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'age' => $request->age,
            'blood_pressure' => $request->blood_pressure,
            'mobile' => $request->mobile,
            'weight' => $request->weight,
            'donornumber' => $request->donornumber,
            'hospital' => $request->hospital,
            'blood_group' => $request->blood_group,
            'date' => $request->date,
            'time' => $request->time,
            'notes' => $request->notes,
        ]);
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('donor.index'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor  $Donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        $donor->delete();
        // flash message
        session()->flash('success', ' تم الحذف بنجاح.');
        // redirect user
        return redirect(route('donor.index'));
    }

   
}
