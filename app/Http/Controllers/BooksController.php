<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id' ,'desc')->paginate(10);
        return response()->view('book.list' , compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return response()->view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
        ]);
        if(! $validator->fails()){
            $books = new Book();
            $books->name = $request->get('name');
            $books->email = $request->get('email');
            $books->mobile = $request->get('mobile');
            $books->time = $request->get('time');
            $books->number_of_people = $request->get('number_of_people');
            $books->date = $request->get('date');
            $books->nots = $request->get('nots');

        $isSaved = $books->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الحجز بنجاح '] , 200);
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة الحجز'] , 400);
        }
    }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::findOrFail($id);
        // return response()->view('cms.book.show' , compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::findOrFail($id);
        // return response()->view('cms.book.edit' , compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            // 'name' => 'required|string|min:3|max:20',
            // 'email' => 'required|string|min:7|max:30',
        ]);

        if(!$validator->fails()){

            $books = Book::findOrFail($id);
            $books->name = $request->get('name');
            $books->email = $request->get('email');
            $books->mobile = $request->get('mobile');
            $books->date = $request->get('date');
            $books->time = $request->get('time');

            $isUpdate = $books->save();
            return ['redirect' =>route('books.index')];

            if($isUpdate){
                return response()->json(['icon' => 'success' , 'title' => 'تم تعديل الحجز بنجاح'] , 200);
            }
            else {
                return response()->json(['icon' => 'error' , 'title' => ' فشلت عملية تعديل الحجز'] , 400);

            }

        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف الحجز بنجاح'] ,  $books ? 200 : 400);
    }
}
