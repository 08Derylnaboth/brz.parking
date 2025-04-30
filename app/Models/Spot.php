<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    /** @use HasFactory<\Database\Factories\SpotFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function spotAttributes(): BelongsToMany
    {
        return $this->belongsToMany(SpotAttribute::class);
    }

    public function garage(): BelongsToMany
    {
        return $this->belongsToMany(Garage::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function size(): BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return (new SpotFilters($filters))->filter($query);
    }

}
