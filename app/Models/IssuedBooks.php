<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBooks extends Model
{
    use HasFactory;

    public function books() {
        $this->hasMany(Book::class, 'book_number', 'isbn');
        $this->hasMany(Book::class, 'book_title', 'title');
        $this->hasMany(Book::class, 'book_author', 'author');
    }

    public function users() {
        $this->hasMany(User::class, 'student_id', 'id');
    }
}
