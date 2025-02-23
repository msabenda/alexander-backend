<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'quote',
        'author',
        'image_path', // Ensure this is fillable
    ];

    // Get full image URL for frontend
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }
}

