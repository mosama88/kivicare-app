<?php

namespace App\Services;

use App\Repositories\Interfaces\SpecialityInterface;



class SpecialityService
{

    public function __construct(public SpecialityInterface $speciality) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->speciality->getData();
    }
    public function store($data)
    {
        return $this->speciality->storeData($data);
    }

    public function update($id, $data)
    {
        return $this->speciality->updateData($id, $data);
    }
    public function show($id)
    {
        return $this->speciality->showById($id);
    }
    public function destroy($id)
    {
        return $this->speciality->destroyById($id);
    }
}