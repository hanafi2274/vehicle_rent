<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gas_usage extends Model
{
    use HasFactory;
    protected $table = "gas_usage";
    protected $fillable = [
        'liter_per_day',
        'usage_id',

    ];
    public $timestamps = false;

}
