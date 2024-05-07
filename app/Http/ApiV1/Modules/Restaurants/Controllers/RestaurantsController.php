<?php

namespace App\Http\ApiV1\Modules\Restaurants\Controllers;


class RestaurantsController
{
    public function get(int $id, RestaurantsQuery $query): RestaurantsResource
    {
        return new RestaurantsResource($query->findOrFail($id));
    }
}