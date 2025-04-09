<?php

namespace App\Services;

use App\Models\Country;
use App\Repositories\CountryRepository;

class CountryService
{

    public function __construct(public CountryRepository $repo) {}

    public function index()
    {
        return $this->repo->getData();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($data)
    {
        return $this->repo->storeData($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        return $this->repo->showById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, $data)
    {
        return $this->repo->updateData($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $this->repo->destroyData($id);
    }
}