<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller{
    public function home(){
        $authors = Author::all();
        $countries = Country::all();
        $books = Book::all();
        $genres = Genre::all();

        return view('home', ['authors' => $authors, 'countries' => $countries, 'books' => $books, 'genres' => $genres]);
    }
    public function about(){
        return view('about');
    }
    public function review(){

        return view('review', ['reviews' => Book::all()]);
    }
    public function review_check(Request $request){
        return redirect()->route('review');
    }

}
