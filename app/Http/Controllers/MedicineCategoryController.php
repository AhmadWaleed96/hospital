<?php

namespace App\Http\Controllers;

use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicineCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('medicines.categories.list')
        ->with('categories', MedicineCategory::all());
    }

    public function create()
    {
        return view('medicines.categories.create');
    }

    public function store(Request $request)
    {

        MedicineCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // flash message
        session()->flash('success', 'تم إضافة نوع الدواء بنجاح.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }

    public function edit(MedicineCategory $category)
    {
        return view('medicines.categories.create')->with('category', $category);
    }

    public function update(Request $request, MedicineCategory $category)
    {
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }

    public function destroy(MedicineCategory $category)
    {
        // $category->medicines()->detach();
        $category->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }
}
