<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Patient\CreatePatientRequest;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('users.output.list')->with('output', User::Output()->get())->with('departments',Department::all());
    }

    public function create()
    {
        return view('users.output.create')->with('departments',Department::all());
    }

    public function store(CreatePatientRequest $request)
    {
       
        $patient = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'blood_group' => $request->blood_group,
            'type' => 'patient'
        ]);

        if ($request->departments){
            $patient->departments()->attach($request->departments);
        }

        // flash message
        session()->flash('success', 'تم إضافة المريض بنجاح.');
        // redirect user
        return redirect(route('output.index'));
    }

    public function edit(User $patient)
    {
        return view('users.output.create')
        ->with('patient', $patient)
        ->with('departments',Department::all());
    }

    public function update(Request $request, User $patient)
    {
        $data = $request->only('first_name', 'last_name', 'national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency', 'blood_group');

        if ($request->hasFile('picture')) {
            $pic = $request->picture->store('output_pictures');
            Storage::delete($patient->picture);
            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $patient->departments()->sync($request->departments);
        }

        $patient->update($data);
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('output.index'));
    }

    public function destroy(User $patient)
    {
        $patient->departments()->detach();
        Storage::delete($patient->picture);
        $patient->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('output.index'));
    }
}
