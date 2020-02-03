<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = "permission";
    // public $primaryKey = 'id';
    public $timestamps = false;
    // public $incrementing = true;
    protected $fillable = [
        'id',
        'permission_name',
    ];
}
