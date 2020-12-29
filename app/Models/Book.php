<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable =
    [
        'name',
        'sex',
        'job',
        'weapon',
        'technique',
        'character'
    ];
}
