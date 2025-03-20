<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Requests\Dashboard\CountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::paginate(10);
        return response()->json(['Countries' => CountryResource::collection($countries)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        $country = Country::create($this->mapRequestToCulomns($request->validated()));

        return response()->json(['Country' => new CountryResource($country)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return response()->json(['Country' => new CountryResource($country)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->update($this->mapRequestToCulomns($request->validated()));

        return response()->json(['Country' => new CountryResource($country)], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();

        return response()->json(['Country' => new CountryResource($country)], 204);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['country_name']];
    }
}