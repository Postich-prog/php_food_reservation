<?php

namespace App\Domain\Reservation\Actions;

use App\Domain\Reservation\Models\Reservation;
use App\Domain\Reservation\Models\Restaurant;

class CreateReservationAction
{
    public function execute(array $fields): Reservation
    {
        $reservation = new Reservation();
        $reservation->fill($fields);
        $reservation->save();

        return $reservation;
    }
}