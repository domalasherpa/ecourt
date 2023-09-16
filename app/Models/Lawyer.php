<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $fillable=[
        'userId',
        'barLicenseId',
        'experience',
        'updated_at',
        'created_at',
    ];
}
