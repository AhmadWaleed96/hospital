<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('departments.list')
        ->with('departments',Department::all());
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(CreateDepartmentRequest $request)
    {
        Department::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        // flash message
        session()->flash('success', 'تم إضافة القسم بنجاح.');
        // redirect user
        return redirect(route('departments.index'));
    }

    public function show(Department $department)
    {
        return view('home')->with('department',$department);
    }

    public function edit(Department $department)
    {
        return view('departments.create')->with('department',$department);
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->only('name','description'));
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('departments.index'));
    }

    public function destroy(Department $department)
    {
        $department->doctors()->detach();
        $department->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('departments.index'));
    }
}
