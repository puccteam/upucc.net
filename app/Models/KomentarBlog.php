<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBlog extends Model
{
    /** @use HasFactory<\Database\Factories\KomentarBlogFactory> */
    use HasFactory;

    protected $table = 'komentar_blog';
}
