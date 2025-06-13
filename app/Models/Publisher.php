<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    public function publisherYear() {
        return $this->belongsTo(Book::class, 'publishing year');
    }
}
