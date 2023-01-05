<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegionRequest extends FormRequest
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
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first(), 400));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en' => ['required' , 'string' , 'max:255'],
            'name_ar' => ['required' , 'string' , 'max:255'],
            'username_en' => ['required' , 'string' , 'max:255'],
            'username_ar' => ['required' , 'string' , 'max:255'],
            // 'location_en' => ['required' , 'string' , 'max:255'],
            // 'location_ar' => ['required' , 'string' , 'max:255'],
            // 'box_en' => ['required' , 'string' , 'max:255'],
            // 'box_ar' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'string' , 'email' , 'max:255'],
            'phone' => ['required'],
            // 'fax' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'name_en' => 'Name (EN)',
            'name_ar' => 'Name (AR)',
            'username_en' => 'Username (EN)',
            'username_ar' => 'Username (AR)',
            'location_en' => 'Location (EN)',
            'location_ar' => 'Location (AR)',
            'box_en' => 'Box (EN)',
            'box_ar' => 'Box (AR)'
        ];
    }
}
