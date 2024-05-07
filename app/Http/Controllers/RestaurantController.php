<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class RestaurantController extends Controller {
    public function index()
    {
        $restaurants = DB::table('restaurants')->get();
<<<<<<< HEAD
        return view('restaurant.id', ['restaurants' => $restaurants]);
=======
        return view('restaurant.index', ['restaurants' => $restaurants]);
>>>>>>> master
    }
}