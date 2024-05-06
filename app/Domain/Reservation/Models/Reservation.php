<?php

namespace App\Domain\Reservation\Models;

use Carbon\CarbonInterface;
use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property int $restaurant_id
 * @property int $guests
 * @property Datetime $fromreserve
 * @property Datetime $toreserve
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Reservation extends Model
{
    protected $table = 'reservations';
}
