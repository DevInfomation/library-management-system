<?php

namespace App\Models;

use App\Http\Controllers\LoginController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function reportRelationWithUser() {
        return $this->belongsTo(User::class, 'user_name', 'name');
    }

    public function reportRelationWithIsbn() {
        return $this->belongsTo(Book::class, 'isbn', 'book_number');
    }
}
