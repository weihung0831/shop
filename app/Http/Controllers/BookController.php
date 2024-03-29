<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'total_population' => 'required',
            'date' => 'required',
        ]);
        Book::create($validation);
        return redirect()->back()->with('success', 'Book Added Successfully');
    }
}
