<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
        $allCities = City::paginate(10);
        if (!$allCities) {
            return response(['error' => 'There is no city']);
        }
        return response()->json($allCities);
    }

    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->name;
        $city->group_id = $request->group_id;
        $city->save();

        return response()->json($city);
    }

    public function show($city_id)
    {
        $city = City::where('city_id', '=', (int)$city_id)->first();
        if (!$city) {
            return response(['error' => 'City not found']);
        }
        return response()->json($city);
    }

    public function update(Request $request, $city_id)
    {
        $city = City::where('city_id', '=', (int)$city_id)->first();
        if (!$city) {
            return response(['error' => 'City not found']);
        }

        $city->name = $request->name;
        $city->group_id = $request->group_id;
        $city->save();

        return response()->json($city);
    }

    public function destroy($city_id)
    {
        $city = City::where('city_id', '=', (int)$city_id)->first();
        if (!$city) {
            return response(['error' => 'City not found']);
        }
        $city->delete();
        return response()->json(['success' => 'City deleted']);
    }
}