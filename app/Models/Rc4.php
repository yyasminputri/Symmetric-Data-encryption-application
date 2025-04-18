<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rc4 extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'id_card', 'document', 'video', 'user_id', 'key'];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}