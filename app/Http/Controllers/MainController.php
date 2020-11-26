<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
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
//        $valid = $request->validate([
//            'email'=>'required|min:4|max:100',
//            'title'=>'required|min:4|max:100',
//            'message'=>'required|min:15|max:900'
//        ]);
//
//        $review = new Contact();
//        $review->email = $request->input('email');
//        $review->title = $request->input('title');
//        $review->message = $request->input('message');
//
//        $review->save();

        return redirect()->route('review');
    }
}
