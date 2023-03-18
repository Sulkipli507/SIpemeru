<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'prodi',
        'phone',
        'address',
        'program',
        'start_date',
        'end_date',
        'status',
        'licensor',
    ];
}
