<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    /** @use HasFactory<\Database\Factories\SpotFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function spotAttributes():BelongsToMany{
        return $this->belongsToMany(related:SpotAttribute::class);
    }

    public function garage():BelongsToMany{
        return $this->belongsToMany(related:Garage::class);
    }

    public function reservation():HasMany{
        return $this->hasMany(related:Reservation::class);
    }

    public function size():BelongsToMany{
        return $this->belongsToMany(related:Size::class);
    }

}
