<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\LapReport;
use App\LapTemplate;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LapReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getTemplateById(Request $request){
        if($request->id){
            $template = LapTemplate::find($request->id);
        }
        return response()->json(['html' => $template->template]);
    }

    public function index()
    {
        return view('lap.lapreports.list')->with('lapreports',LapReport::all());
    }

    public function create()
    {
        return view('lap.lapreports.create')
            ->with('patients',User::patient()->get())
            ->with('templates',LapTemplate::all())
            ->with('doctors',User::doctor()->get());
    }

    public function store(Request $request)
    {
        // $pic = $request->picture->store('patients_pictures');
        $lapreport = LapReport::create([
            'date'=>$request->date,
            'time'=>$request->time,
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'template_id'=>$request->template,
            'report'=>$request->report,
            // 'picture' => $pic,
        ]);
        if($request->picture){
            $pic = $request->picture->store('patients_pictures');
            $lapreport->picture = $pic;
            $lapreport->save();
        }
        // flash message
        session()->flash('success', 'تمت إضافة تقرير المختبر بنجاح.');
        // redirect user
        return redirect(route('lapreports.index'));
    }

    public function show(LapReport $lapreport)
    {
        return view('lap.lapreports.show')->with('lapreport',$lapreport);
    }

    public function edit(LapReport $lapreport)
    {
        return view('lap.lapreports.create')
            ->with('lapreport',$lapreport)
            ->with('patients',User::patient()->get())
            ->with('templates',LapTemplate::all())
            ->with('doctors',User::doctor()->get());
    }

    public function update(Request $request, LapReport $lapreport)
    {
        $lapreport->update([
            'date'=>$request->date,
            'time'=>$request->time,
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'template_id'=>$request->template,
            'report'=>$request->report,
        ]);
        
        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('lapreports.index'));
    }

    public function destroy(LapReport $lapreport)
    {
        $lapreport->delete();
        // flash message
        session()->flash('success', 'تم الحذف بنجاح');
        // redirect user
        return redirect(route('lapreports.index'));
    }
}
