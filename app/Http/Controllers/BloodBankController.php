<?php

namespace App\Http\Controllers;

use App\BloodBank;
use App\TimeSchedule;
use Illuminate\Http\Request;

class BloodBankController extends Controller
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
        return view('blood_bank.list')
        ->with('blood_bank', BloodBank::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blood_bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BloodBank::create([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'age' => $request->age,
            'weight' => $request->weight,
            'donornumber' => $request->donornumber,
            'mobile' => $request->mobile,
            'hospital' => $request->hospital,
            'blood_group' => $request->blood_group,
            'date' => $request->date,
            'time' => $request->time,
            'notes' => $request->notes,
            'type' => 'BloodBank'
        ]);

        // flash message
        session()->flash('success', 'تم إضافة المتبرع بنجاح.');
        // redirect user
        return redirect(route('blood_bank.index'));
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodBank $blood_bank)
    {
        return view('blood_bank.create')
        ->with('blood_bank', $blood_bank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bloodbank $blood_bank)
    {
        $blood_bank->update([
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
        return redirect(route('blood_bank.index'));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function show(BloodBank $blood_bank)
    {
        $blood_bank->delete();
        // flash message
        session()->flash('success', ' تم الحذف بنجاح.');
        // redirect user
        return redirect(route('blood_bank.index'));
    }

   
}
