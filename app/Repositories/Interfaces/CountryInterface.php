<?php

namespace App\Repositories\Interfaces;

interface CountryInterface
{
    public function getData();

    public function storeData($data);

    public function showById($id);

    public function updateData($id, $data);

    public function destroyData($id);
}