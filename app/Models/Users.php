<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";
    public $primaryKey = 'id';
    public $timestamps = false;
    // public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role_id',
    ];
}
