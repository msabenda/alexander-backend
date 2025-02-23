<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PictureSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // or any other relevant fields
        'image', // assuming the image field is stored as a path
    ];
}
