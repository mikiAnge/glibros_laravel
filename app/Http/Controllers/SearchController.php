<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index(){
        $search = Input::get('search');

        if($search != ""){
            $book = Book::where('title', 'LIKE', '%' . $search . '%')->get();

            if(count($book) > 0)
                return view('buscar')->withDetails($book)->withQuery($search);
        }

        return view('buscar')->withMessage("No encontramos lo que estas buscando. ╥﹏╥");
    }
}
