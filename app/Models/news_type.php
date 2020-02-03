<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news_type extends Model
{
    protected $table = "news_types";
    // public $primaryKey = 'id';
    public $timestamps = false;
    // public $incrementing = true;
    protected $fillable = [
        'id',
        'name_news',
    ];
}
