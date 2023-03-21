<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'name',
        'prodi',
        'phone',
        'address',
        'room_id',
        'program',
        'start_date',
        'end_date',
        'status',
    ];

    public function room(){
        return $this->BelongsTo(Room::class);
    }
}
