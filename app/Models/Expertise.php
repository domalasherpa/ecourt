<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $table = 'expertise';
    protected  $fillable = [
        'id',
        'expertise',
        'updated_at',
        'created_at',
    ];
}
