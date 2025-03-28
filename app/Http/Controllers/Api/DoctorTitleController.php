<?php

namespace App\Http\Controllers\Api;

use App\Models\DoctorTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorTitleResource;
use App\Http\Requests\Dashboard\DoctorTitleRequest;

class DoctorTitleController extends Controller
{
    public function index()
    {
        $titles = DoctorTitle::get();
        return response()->json(['my Data' => DoctorTitleResource::collection($titles)]);
    }


    public function show(DoctorTitle $title)
    {
        return response()->json(['my Data' => new DoctorTitleResource($title)]);
    }


    public function store(DoctorTitleRequest $request)
    {
        $title = DoctorTitle::create($this->mapRequestToCulomns($request->validated()));
        return response()->json(['data' => new DoctorTitleResource($title)], 201);
    }


    public function edit(DoctorTitleRequest $request, DoctorTitle $title)
    {
        $title->update($this->mapRequestToCulomns($request->validated()));
        return response()->json(['data' => new DoctorTitleResource($title)], 204);
    }

    public function destroy(DoctorTitle $title)
    {
        $title->delete();
        return response()->json(['data' => new DoctorTitleResource($title)], 204);
    }


    private function mapRequestToCulomns($data)
    {
        return ['name' => $data['doctor_title']];
    }
}