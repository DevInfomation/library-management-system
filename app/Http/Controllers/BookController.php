<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Rules\Isbn13Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class BookController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'isbn' => ['sometimes', new Isbn13Rule],
            'title' => 'string',
            'author' => 'string',
            'genre' => 'string',
            'category' => 'string',
            'published_year' => 'integer',
            'price' => 'integer',
            'copies_available' => 'integer',
        ]);

        Book::create($validated);
        return redirect()->route('dashboard');
    }

    public function search(Request $request) {
        $search = $request->input('search');

        // $books = DB::table('books')->where('title', 'LIKE', "%{$search}%")->get();

        // return view('pages.search', compact('books'));

        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('genre', 'LIKE', "%{$search}%")
            ->get();

        return view('pages.search', compact('books'));

        // $books = Book::query()
        //     ->when(
        //         $request->search,
        //         function(Builder $builder) use ($request) {
        //             $builder->where('title', 'LIKE', "%{$request->search}%");
        //         }
        //     );
        
        // return $books;

    }
}
