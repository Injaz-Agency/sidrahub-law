<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawyerJoinRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email|max:255',
            'country_id' => 'required|exists:countries,id',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'legal_entity' => 'required|in:individual_lawyer,law_firm',
            'legal_specialization' => 'required|exists:services,id',
            'registration_number' => 'required|string|max:255',
            'license' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'info' => 'required|string|max:1000',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => __('The owner name field is required.'),
            'name_ar.required' => __('The company name (Arabic) field is required.'),
            'name_en.required' => __('The company name (English) field is required.'),
            'phone.required' => __('The phone field is required.'),
            'email.required' => __('The email field is required.'),
            'email.email' => __('The email must be a valid email address.'),
            'email.unique' => __('This email is already registered.'),
            'country_id.required' => __('The country field is required.'),
            'country_id.exists' => __('The selected country is invalid.'),
            'logo.required' => __('The logo field is required.'),
            'logo.image' => __('The logo must be an image.'),
            'logo.mimes' => __('The logo must be a file of type: jpeg, png, jpg, gif, svg.'),
            'logo.max' => __('The logo may not be greater than 2MB.'),
            'legal_entity.required' => __('The legal entity field is required.'),
            'legal_entity.in' => __('The selected legal entity is invalid.'),
            'legal_specialization.required' => __('The legal specialization field is required.'),
            'legal_specialization.exists' => __('The selected legal specialization is invalid.'),
            'registration_number.required' => __('The registration number field is required.'),
            'license.required' => __('The license field is required.'),
            'license.mimes' => __('The license must be a file of type: pdf, jpg, jpeg, png.'),
            'license.max' => __('The license may not be greater than 5MB.'),
            'info.required' => __('The info field is required.'),
        ];
    }
}
