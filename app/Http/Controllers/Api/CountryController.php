<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(10);
        return response()->json(['Countries' => CountryResource::collection($countries)], 204);
    }


    public function show(Country $countries)
    {
        return response()->json(['Countries' => new CountryResource($countries)], 204);
    }


}