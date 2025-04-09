<?php

namespace App\Http\Controllers\Api;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Services\SpecialityService;
use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Http\Requests\Dashboard\SpecialityRequest;
use GuzzleHttp\Psr7\Message;

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

        return response()->json(['Speciality Data' => new SpecialityResource($this->service->store($this->mapRequestToCulomns($request->validated())))], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(['Speciality Data' => new SpecialityResource($this->service->show($id))]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialityRequest $request, $id)
    {
        $this->service->update($id, $this->mapRequestToCulomns($request->validated()));

        return response()->json(['message' => 'Speciality updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return response()->json([], 204);
    }

    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['speciality_name']];
    }
}
