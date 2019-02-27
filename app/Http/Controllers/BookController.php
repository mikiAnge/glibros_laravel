<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $book->foul = $request->foul;
        $book->category = $request->category;
        $book->causal = $request->causal;
        /*
            if ($request->hasFile('pdf'){accion})
        */
        if($request->pdf){
            $book->pdf = $request->file('pdf')->store($request->foul);  
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
        return view('admin.edit', compact('book'));
    }

    public function listdocu($falta, $cate)
    {

        $book = Book::where('foul', 'like','%' . $falta . '%')
        ->where('category', 'like', '%' . $cate . '%')->paginate(9);
        $titu = $falta.'--'.$cate;

        
        return view('listdocu', compact('book','titu'));
    }

    public function viewpdf(Book $book)
    {
        return view('viewpdf')->with('book', $book);
    }

    public function update(Request $request, Book $book)
    {
        return $request;
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required'
        ]);

        $book->title = $request->title;
        $book->year = $request->year;
        $book->foul = $request->foul;
        $book->category = $request->category;
        $book->causal = $request->causal;
 
        if($request->pdf){
            $book->pdf = $request->file('pdf')->store('public/2015');  
        }
        
        $book->save();

        return back();
    }

    public function destroy(Book $book)
    {
        $book->delete();

        //$photoPath = str_replace('storage', 'public', $book->pdf);
        Storage::Delete($book->pdf);

        return back();
    }
}
