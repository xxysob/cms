<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'brand',
        'symptoms',
        'difficulty',
        'tools_needed',
        'category_id'
    ];

    // Relasi: Article belongs to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}