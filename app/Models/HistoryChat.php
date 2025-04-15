<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HistoryChat extends Model
{
    use HasFactory;

    // Set keyType menjadi string karena UUID adalah string, bukan integer
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'history_chats';

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
        'chat_id',
        'role',
        'content',
        'employee_id',
        'title_chat'
    ];

    
}
