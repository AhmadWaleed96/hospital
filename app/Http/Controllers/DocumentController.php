<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Document;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('documents.list')->with('documents', Document::all());

    }

    public function create()
    {
        return view('documents.create')
            ->with('patients', User::patient()->get())
            ->with('doctors', User::doctor()->get());
    }

    public function store(Request $request)
    {
        $document = Document::create([
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'date' => $request->date,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        if($request->doc){
            $file = $request->doc->store('patients_documents');
            $document->doc = $file;
            $document->save();
        }
        // flash message
        session()->flash('success', 'تم إضافة الوثائق بنجاح.');
        // redirect user
        return redirect(route('documents.index'));
    }

    public function show(Document $document)
    {
        return view('documents.show')->with('document', $document);

    }

    public function edit(Document $document)
    {
        return view('documents.create')
            ->with('patients', User::patient()->get())
            ->with('doctors', User::doctor()->get())
            ->with('document', $document);
    }

    public function update(Request $request, Document $document)
    {
        $document->update([
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'date' => $request->date,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        if ($request->hasFile('doc')) {

            $file = $request->doc->store('patients_documents');

            Storage::delete($document->doc);

            $document['doc'] = $file;

            $document->update();
        }

        // flash message
        session()->flash('success', 'تم التحديث بنجاح.');
        // redirect user
        return redirect(route('documents.index'));
    }

    public function destroy(Document $document)
    {
        Storage::delete($document->doc);
        $document->delete();

        // flash message
        session()->flash('success', 'تم الحذف بنجاح.');
        // redirect user
        return redirect(route('documents.index'));
    }
}
