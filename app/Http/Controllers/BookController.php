<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'pdf' => 'required'
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->year = $request->year;
        $book->category = $request->category;
        /*
            if ($request->hasFile('pdf'){accion})
        */
        if($request->pdf){
            $book->pdf = $request->file('pdf')->store('public/2015');  
        }else{
            $book->pdf = 'there is not';
        }
        
        $book->save();

        return back();
    }

    public function show(Book $book)
    {
        return view('admin.show')->with('book', $book);
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        return $book;
    }
}
