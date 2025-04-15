<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cat',
        'content',     // Teks yang dimasukkan
        'embedding',   // Vektor embedding yang disimpan dalam format JSON
    ];

    // Make sure the embedding is always cast as an array
    protected $casts = [
        'embedding' => 'array',
    ];
}
