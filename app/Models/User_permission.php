<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fact_user_permission extends Model
{
    protected $table = "fact_permission";
    public $primaryKey = 'id';
    public $timestamps = false;
    // public $incrementing = true;
    protected $fillable = [
        'id',
        'user_id',
        'permission_id',
    ];
}
