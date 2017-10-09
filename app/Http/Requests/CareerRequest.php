<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CareerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'birthdate' => 'required|date',
            'major' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'nationality' => 'required',
            'university' => 'required',
            'faculty' => 'required',
            'graduation_year' => 'required',
            'experience_type' => 'required',
            'last_job' => 'required',
            'last_company' => 'required',
            'file' => 'required|file|mimes:doc,docx,pdf',
        ];
    }
}
