<?php

namespace App\Repositories\Interfaces;

interface CountryInterface
{
    public function getData();

    /**
     * Store a newly created resource in storage.
     */
    public function storeData($data);

    /**
     * Display the specified resource.
     */
    public function showById($id);

    /**
     * Update the specified resource in storage.
     */
    public function updateData($id, $data);

    /**
     * Remove the specified resource from storage.
     */
    public function destroyData($id);
}