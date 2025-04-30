<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExistingReservationRuleForInterval implements ValidationRule
{
    public function __construct(public $spot_id = null)
    {
    }

    public function passes($attribute, $value): bool
    {
        if (!$this->spot_id) {
            return false;
        }

        return Spot::where('id', $this->spot_id)->whereHas('reservations', function (Builder $query) use ($value) {
                $query->where([
                    ['start', '<=', Carbon::parse(Arr::get($value, 'end'))],
                    ['end', '>=', Carbon::parse(Arr::get($value, 'start'))],
                ]);
            })->count() === 0;
    }

    public function message(): string
    {
        return 'A reservation for this spot with this period is not valid.';
    }
}
