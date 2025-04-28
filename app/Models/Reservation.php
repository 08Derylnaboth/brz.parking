<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates=['start','end','paid_at','created_at','updated_at'];

    public function spot():BelongsToMany{
        return $this->belongsToMany(related:Spot::class);
    }

    public function user():BelongsToMany{
        return $this->belongsToMany(related:User::class);
    }

}
