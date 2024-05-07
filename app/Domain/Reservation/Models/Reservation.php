<?php

namespace App\Domain\Reservation\Models;

use Carbon\CarbonInterface;
use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
<<<<<<< HEAD
 * @property int $restaurant_id
 * @property int $numguests
=======
 * @property int $restaurantID
 * @property int $guests
>>>>>>> master
 * @property Datetime $fromreserve
 * @property Datetime $toreserve
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Reservation extends Model
{
<<<<<<< HEAD
    protected $table = 'reservations';
    protected $fillable = [
        'restaurant_id',
        'numguests',
        'fromreserve',
        'toreserve',
    ];
=======
    protected $table = 'reservation';
>>>>>>> master
}
