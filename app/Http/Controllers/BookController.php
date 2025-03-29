<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Rules\Isbn13Rule;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'isbn' => ['sometimes', new Isbn13Rule],
            'title' => 'string',
            'author' => 'string',
            'genre' => 'string',
            'category' => 'string',
            'published-year' => 'integer',
            'price' => 'integer',
            'copies-available' => 'integer',
        ]);


        return redirect()->route('dashboard');
    }
}
