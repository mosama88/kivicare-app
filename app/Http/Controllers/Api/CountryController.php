<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CountryService;
use App\Http\Resources\CountryResource;
use App\Http\Requests\Dashboard\CountryRequest;

class CountryController extends Controller
{

    public function __construct(public CountryService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->apiSuccessResponse(CountryResource::collection($this->service->index()), "Data Retrived Succussefully", status: 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        return $this->apiSuccessResponse(data: new CountryResource($this->service->store($this->mapRequestToCulomns($request->validated()))), message: "Created Successfully", status: 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->apiSuccessResponse(new CountryResource($this->service->show($id)), message: "Retrived Successfully", status: 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, $id)
    {

        $this->service->update($id, $this->mapRequestToCulomns($request->validated()));
        return response()->json([], 204);
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
        return ['name' => $data['country_name']];
    }
}