<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        'title', 
        'sub_title',
        'project_timeline',
        'our_service',
        'content',
        'cover_image',
        'cover_image_id',
    ];
}
