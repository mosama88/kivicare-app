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
        return $this->apiSuccessResponse(CountryResource::collection($countries), "Data Retrived Succussefully", status: 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        $country = Country::create($this->mapRequestToCulomns($request->validated()));
        return $this->apiSuccessResponse(data: new CountryResource($country), message: "Created Successfully", status: 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return $this->apiSuccessResponse(data: new CountryResource($country), message: "Retrived Successfully", status: 200);
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