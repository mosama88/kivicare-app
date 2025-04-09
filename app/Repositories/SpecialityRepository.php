<?php

namespace App\Repositories;

use App\Models\Speciality;
use App\Repositories\Interfaces\SpecialityInterface;

class SpecialityRepository implements SpecialityInterface
{

    /**
     * Display a listing of the resource.
     */
    public function getData()
    {
        return Speciality::paginate(10);
    }
}