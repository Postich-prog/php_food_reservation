<?php

namespace App\Domain\Reservation\Models;

use Carbon\CarbonInterface;
use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property string $name
 * @property string $description
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Restaurant extends Model
{
    protected $table = 'restaurant';
}
