<?php

namespace App\Http\Controllers\Api;

use App\Domain\Reservation\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use Illuminate\Http\Request;

class RestaurantController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return response()->json([
            'status' => true,
            'restaurants' => $restaurants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $restaurant = Restaurant::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Restaurant Created successfully!",
            'restaurant' => $restaurant
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
