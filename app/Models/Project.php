<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
        'type',
        'icon',
        'tag',
        'technologies',
        'demo_url',
        'source_url',
    ];
}
