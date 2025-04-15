<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Document extends Model
{
    use HasFactory;

    // Set keyType menjadi string karena UUID adalah string, bukan integer
    protected $keyType = 'string';
    public $incrementing = false;

    // Event creating untuk menghasilkan UUID sebelum menyimpan
    protected static function booted()
    {
        static::creating(function ($model) {
            // Mengecek apakah UUID sudah ada, jika tidak maka menghasilkan UUID baru
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'id',
        'title',
        'content',     // Teks yang dimasukkan
        'embedding',   // Vektor embedding yang disimpan dalam format JSON
        'modul',
        'name',
        'employee_id',
        'dept_id'
    ];

    // Make sure the embedding is always cast as an array
    protected $casts = [
        'embedding' => 'array',
    ];
}
