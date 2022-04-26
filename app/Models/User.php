<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class user extends Authenticatable
{
    protected $table = "user";

    use HasFactory;
    protected $fillable = [
        'name',
        'role',
        'password',
        'username',
    ];
    protected $hidden = [
        'password',
    ];
    public function getPasswordAttribute($value)
    {
        if( \Hash::needsRehash($value) ) {
                $value = \Hash::make($value);
        }

        return  $value;
    }
    public $timestamps = false;

}
