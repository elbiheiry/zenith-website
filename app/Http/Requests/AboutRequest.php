<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AboutRequest extends FormRequest
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
            'image1' => ['image' , 'max:2048', 'mimes:png,jpg,jpeg'],
            'description1_en' => ['required'],
            'description1_ar' => ['required'],
            'clients' => ['required' , 'numeric'],
            'projects' => ['required' , 'numeric'],
            'partners' => ['required' , 'numeric'],
            'image2' => ['image' , 'max:2048', 'mimes:png,jpg,jpeg'],
            'description2_en' => ['required'],
            'description2_ar' => ['required'],
            'image3' => ['image' , 'max:2048', 'mimes:png,jpg,jpeg'],
            'description3_en' => ['required'],
            'description3_ar' => ['required'],
            'image4' => ['image' , 'max:2048', 'mimes:png,jpg,jpeg'],
            'description4_en' => ['required'],
            'description4_ar' => ['required'],
        ];
    }

    public function attributes()
    {
        return [
            'image1' => 'About us Image',
            'image2' => 'Our Mission Image',
            'image3' => 'Our Vision Image',
            'image4' => 'Our principles Image',
            'description1_en' => 'About us (EN)',
            'description1_ar' => 'About us (AR)',
            'description2_en' => 'Our Mission (EN)',
            'description2_ar' => 'Our Mission (AR)',
            'description3_en' => 'Our Vision (EN)',
            'description3_ar' => 'Our Vision (AR)',
            'description4_en' => 'Our principles (EN)',
            'description4_ar' => 'Our principles (AR)',
            'clients' => 'no. of clients',
            'projects' => 'no. of projects',
            'partners' => 'no. of partners',
        ];
    }
}
