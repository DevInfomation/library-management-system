<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'genre',
        'category',
        'published_year',
        'price',
        'copies_available',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function ($book) {
            if (!$book->isbn) {
                $book->isbn = self::generatingValidIsbn13();
            }
        });
    }

    private static function generatingValidIsbn13() {
        do {
            // Start with 978 979
            $prefix = random_int(0, 1) ? '978' : '979';

            // Generate 9 random digits
            $body = Str::padLeft(random_int(0, 999999999), 9, '0');

            // Calculate check digit
            $partial = $prefix . $body;
            $checkDigit = self::calculateIsbn13CheckDigit($partial);

            $isbn = $partial . $checkDigit;
        } while (self::where('isbn', $isbn)->exists());

        return $isbn;
    }

    private static function calculateIsbn13CheckDigit($partial) {
        $sum = 0;
        for ($i = 0; $i < 12; $i++) {
            $weight = ($i % 2 === 0) ? 1 : 3;
            $sum += (int)$partial[$i] * $weight;
        }

        return (10 - ($sum % 10)) % 10;
    }

    public static function index() {
        $books = Book::all();
        return $books;
    }
}
