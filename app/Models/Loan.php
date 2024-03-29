<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nim',
        'name',
        'prodi',
        'phone',
        'address',
        'room_id',
        'program',
        'letter',
        'start_date',
        'end_date',
        'status',
    ];

    public function room(){
        return $this->BelongsTo(Room::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
