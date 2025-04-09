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

    public function storeData($data)
    {
        return Speciality::create($data);
    }


    public function showById($id)
    {
        return Speciality::findOrFail($id);
    }
    public function updateData($id, $data)
    {
        return Speciality::where('id', $id)->update($data);
    }

    public function destroyById($id)
    {
        return Speciality::where('id', $id)->delete();
    }
}