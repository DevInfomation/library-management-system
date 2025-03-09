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
        ]);


        $book = Book::create($validated);
    }
}
