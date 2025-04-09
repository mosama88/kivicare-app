<?php

namespace App\Http\Controllers\Api;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Services\SpecialityService;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Http\Requests\Dashboard\SpecialityRequest;

class SpecialityController extends Controller
{

    public function __construct(public SpecialityService $service) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['Speciality Data' => SpecialityResource::collection($this->service->index())]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialityRequest $request)
    {

        $speciality = Speciality::create($this->mapRequestToCulomns($request->validated()));
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialityRequest $request, Speciality $speciality)
    {

        $speciality->update($this->mapRequestToCulomns($request->validated()));
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {

        $speciality->delete();
        return response()->json(['Speciality Data' => new SpecialityResource($speciality)], 201);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}
