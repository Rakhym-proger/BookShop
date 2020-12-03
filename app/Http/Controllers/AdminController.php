<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function admin_users(Request $request) {
        return view('admin_users', [
            'users' => User::all()
        ]);
    }
    public function admin_books(Request $request) {
        return view('admin_books', [
            'books' => Book::all()
        ]);
    }
    public function admin_genres(Request $request) {
        return view('admin_genres', [
            'genres' => Genre::all()
        ]);
    }
    public function admin_authors(Request $request) {
        return view('admin_authors', [
            'authors' => Author::all()
        ]);
    }
    public function admin_countries(Request $request) {
        return view('admin_countries', [
            'countries' => Country::all()
        ]);
    }
}
