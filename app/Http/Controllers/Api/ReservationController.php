<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(ReservationCreateRequest $request):ReservationResource
    {
        $reservation=$request->user()->reservations()->create($request->validated());
        return new ReservationResource($reservations);
    }

    public function update(ReservationUpdateRequest $request, Reservation $reservation):ReservationResource
    {
        // $request->user()->can(abilities;'update',$reservation);
        $reservation->update($request->validated);
        return new ReservationResource($reservation->fresh());
    }

    public function destroy(ReservationDestroyRequest $request, Reservation $reservation):JsonResponse
    {
        // $request->user()->can(abilities;'delete',$reservation);
        $reservation->delete();
        return response()->json(data:'ok',status:204);
    }

}
