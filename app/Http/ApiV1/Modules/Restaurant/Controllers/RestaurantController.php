<?php

namespace App\Http\ApiV1\Modules\Restaurant\Controllers;


use App\Domain\Reservation\Actions\CreateRestaurantAction;
use App\Http\ApiV1\Modules\Restaurant\Queries\RestaurantQuery;
use App\Http\ApiV1\Modules\Restaurant\Requests\CreateRestaurantRequest;
use App\Http\ApiV1\Modules\Restaurant\Resources\RestaurantResource;

class RestaurantController
{
    public function create(CreateRestaurantRequest $request, CreateRestaurantAction $action): RestaurantResource
    {
        return new RestaurantResource($action->execute($request->validated()));
    }

    public function get(int $id, RestaurantQuery $query): RestaurantResource
    {
        return new RestaurantResource($query->findOrFail($id));
    }
}