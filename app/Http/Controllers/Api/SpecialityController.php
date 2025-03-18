<?php

namespace App\Http\Controllers\Api;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;

class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = Speciality::get();
        return response()->json(['Speciality Data' => SpecialityResource::collection($specialities)]);
    }
}
