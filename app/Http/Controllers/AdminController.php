<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AdminController extends Controller {
    public function admin_users(Request $request) {
        return view('admin_users', [
            'users' => User::all()
        ]);
    }
    public function admin_books(Request $request) {
        return view('admin_books', [
            'books' => Book::all(),
            'authors' => Author::all()
        ]);
    }
    public function admin_books_post(Request $request) {
        if($request->hasFile('filename')){
            $file = $request->file('filename');
            $file_name = time().".".$file->getClientOriginalExtension();

            $file->storeAs('public/doc_files', $file_name);

            $img_name = '';
            if($request->hasFile('img')) {
                $img = $request->file('img');
                $img_name = time() . "." . $img->getClientOriginalExtension();

                $img->storeAs('public/images', $img_name);
            }

            Book::create([
                'name' => $request->input('name'),
                'date' => $request->input('date'),
                'cost' => $request->input('cost'),
                'author_id' => $request->input('author'),
                'img' => $img_name,
                'filename' => $file_name
            ]);
        }
        return view('admin_books', [
            'books' => Book::all(),
            'authors' => Author::all()
        ]);
    }
    public function admin_genres(Request $request) {
        return view('admin_genres', [
            'genres' => Genre::all()
        ]);
    }

    public function admin_genres_post(Request $request) {
        Genre::create([
            'name' => $request->input('name')
        ]);

        return view('admin_genres', [
        'genres' => Genre::all()
        ]);
    }

    public function admin_authors(Request $request) {
        return view('admin_authors', [
            'authors' => Author::all(),
            'countries' => Country::all()
        ]);
    }

    public function admin_authors_post(Request $request) {
        Author::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birth_date' => $request->input('date'),
            'country_id' => $request->input('country')
        ]);

        return view('admin_authors', [
            'authors' => Author::all(),
            'countries' => Country::all()
        ]);
    }
    public function admin_countries(Request $request) {
        return view('admin_countries', [
            'countries' => Country::all()
        ]);
    }
    public function admin_countries_post(Request $request) {
        Country::create([
            'name' => $request->input('name')
        ]);

        return view('admin_countries', [
            'countries' => Country::all()
        ]);
    }
}
