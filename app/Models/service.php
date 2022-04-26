<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = "service";
    protected $fillable = [
        'date',
        'head_office_agreement',
        'branch_office_agreement',
        'head_office_manager',
        'branch_office_manager',
        'driver',
        'vehicle',
        'description',
    ];
    public $timestamps = false;

}
