<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class DoctorTitleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $doctorId = $this->route()->doctor_titles->id ?? null;
        return [
            'doctor_title' => 'required|min:3,max:100|unique:doctor_titles,name,' . $doctorId,
        ];
    }


    public function messages()
    {
        return [
            'doctor_title.required' => 'Doctor Title is Required',
        ];
    }
}