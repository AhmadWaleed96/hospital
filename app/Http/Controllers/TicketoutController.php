<?php

namespace App\Http\Controllers;

use App\ticketout;
use App\Department;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ticketoutController extends Controller
{
    public function index()
    {
        return view('users.ticketout.list')->with('ticketout', User::ticketout()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.ticketout.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {

        $ticketout = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'status' => $request->status,
            'type' => 'ticketout',
        ]);
        if ($request->departments){
            $ticketout->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'تم إضافة التذكرة بنجاح.');
        // redirect user
        return redirect(route('ticketout.index'));
    }

    public function show(User $ticketout)
    {
        return view('users.ticketout.show')
        ->with('ticketout', $ticketout)->with('departments',Department::all());

    }

    public function edit(User $ticketout)
    {
        return view('users.ticketout.create')
        ->with('ticketout', $ticketout
        )->with('departments',Department::all());

    }

    public function update(Request $request, User $ticketout)
    {
        $data = $request->only('first_name','last_name','status','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
       
        if ($request->departments) {
            $ticketout->departments()->sync($request->departments);
        }

        $ticketout->update($data);
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('ticketout.index'));
    }

    public function destroy(User $ticketout)
    {
        $ticketout->departments()->detach();
        $ticketout->timeSchedules()->delete();
        Storage::delete($ticketout->picture);
        $ticketout->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('ticketout.index'));
    }
}
