<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTags extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'metatags';
    protected $fillable = [
        'title',
        'desc',
        'keyword',
        'pages',
        'url'

    ];
}
