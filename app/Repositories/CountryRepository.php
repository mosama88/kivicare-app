<?php

namespace App\Repositories;

use App\Models\Country;
use App\Repositories\Interfaces\CountryInterface;

class CountryRepository implements CountryInterface
{


    public function getData()
    {
        return Country::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeData($data)
    {
        return Country::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function showById($id)
    {
        return Country::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData($id, $data)
    {
        return Country::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyData($id)
    {
        return Country::where('id', $id)->delete();
    }
}