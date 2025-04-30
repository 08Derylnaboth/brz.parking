<?php

namespace App\Observers;

class ReservationObserver
{
    public function creating(Reservation $reservation):void
    {
        $reservation->uuid = Str::uuid();

        Reservation::query()
            ->whereNull('paid_at')
            ->where('user_id', $reservation->user_id)
            ->delete();
    }
    
}
