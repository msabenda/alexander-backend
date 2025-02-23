<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'images']; // Ensure 'title' and 'images' are fillable

    // Cast the 'images' field to an array automatically
    protected $casts = [
        'images' => 'array', // Laravel will automatically handle 'images' as an array
    ];
}
