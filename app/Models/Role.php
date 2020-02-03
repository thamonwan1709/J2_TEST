<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";
    public $primaryKey = 'id';
    public $timestamps = false;
    // public $incrementing = false;
    protected $fillable = [
        'id',
        'role_name',
    ];
}
