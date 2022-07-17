<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('medicines.list')
        ->with('medicines', Medicine::all()) 
        ->with('categories', MedicineCategory::all());
    }

    public function create()
    {
        return view('medicines.create')
        ->with('medicines', Medicine::all()) 
        ->with('categories', MedicineCategory::all());
    }

    public function store(Request $request)
    {

        Medicine::create([
            'name' => $request->name,
            'instruction' => $request->instruction,
            'category_id' => $request->category,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'company' => $request->company,
            'expire_date' => $request->expire_date,
        ]);

        // flash message
        session()->flash('success', 'تم إضافة الدواء بنجاح.');
        // redirect user
        return redirect(route('medicines.index'));
    }

    public function show(Medicine $medicine)
    {
        return view('medicines.show')
        ->with('categories', MedicineCategory::all())
        ->with('medicine', $medicine);
    }

    public function edit(Medicine $medicine)
    {
        return view('medicines.create')
            ->with('medicine', $medicine)
            ->with('categories', MedicineCategory::all());
    }

    public function update(Request $request, Medicine $medicine)
    {
        $medicine->update([
            'name' => $request->name,
            'instruction' => $request->instruction,
            'category_id' => $request->category,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'company' => $request->company,
            'expire_date' => $request->expire_date,
        ]);

        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('medicines.index'));
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->prescriptions()->detach();
        $medicine->delete();
        // flash message
        session()->flash('success', ' تم الحذف بنجاح.');
        // redirect user
        return redirect(route('medicines.index'));
    }
}
