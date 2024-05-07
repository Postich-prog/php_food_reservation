<?php

namespace App\Domain\Reservation\Models;

use Carbon\CarbonInterface;
use DateTime;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> master

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
<<<<<<< HEAD
    protected $table = 'restaurants';
    protected $fillable = ['name', 'description'];
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
=======
    protected $table = 'restaurant';
>>>>>>> master
}
