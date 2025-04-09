<?php

namespace App\Repositories\Interfaces;

interface SpecialityInterface
{
    public function getData();
    public function storeData($data);
    public function showById($id);
    public function updateData($data, $id);
    public function destroyById($id);
}