<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $casts = [
        'technologies' => 'array',
    ];

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'filter_category',
        'progress',
        'status',
        'type',
        'icon',
        'tag',
        'technologies',
        'demo_url',
        'source_url',
    ];
}
