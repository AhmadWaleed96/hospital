<?php

namespace App\Http\Controllers;

use App\Department;
use App\ray;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class rayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('users.ray.list')
        ->with('ray', User::ray()->get())
        ->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.ray.create')
        ->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $ray = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'email' => $request->email,
            'medical_degree' => $request->medical_degree,
            'type' => 'ray',
        ]);

        if($request->picture){
            $pic = $request->picture->store('ray_pictures');
            $ray->picture = $pic;
            $ray->save();
        }

        if ($request->departments){
            $ray->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'تم إضافة الأشعة بنجاح.');
        // redirect user
        return redirect(route('ray.index'));
    }

    public function show(User $ray)
    {
        return view('users.ray.show')
        ->with('ray', $ray)
        ->with('departments',Department::all());

    }

    public function edit(User $ray)
    {
        return view('users.ray.create')
        ->with('ray', $ray)
        ->with('departments',Department::all());

    }

    public function update(Request $request, User $ray)
    {
        $data = $request->only('first_name','last_name', 'email', 'address', 
        'medical_degree');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('ray_pictures');

            Storage::delete($ray->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $ray->departments()->sync($request->departments);
        }

        $ray->update($data);
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('ray.index'));
    }

    public function destroy(User $ray)
    {
        $ray->departments()->detach();
        $ray->timeSchedules()->delete();
        Storage::delete($ray->picture);
        $ray->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('ray.index'));
    }
}
