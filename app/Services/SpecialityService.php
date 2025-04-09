<?php

namespace App\Services;

use App\Repositories\SpecialityRepository;



class SpecialityService
{

    public function __construct(public SpecialityRepository $speciality) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->speciality->getData();
    }
}