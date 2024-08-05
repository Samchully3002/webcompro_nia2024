<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaReport extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'mediareports';
    protected $fillable = [
        'title',
        'image',
        'source',
        'title_kr',
        'title_id',
        'news_lang'

    ];
}
