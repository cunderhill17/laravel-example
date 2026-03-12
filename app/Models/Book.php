<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;

    public function author(): BelongsTo 
    {
        return $this->belongsTo(Author::class);
    }
}
