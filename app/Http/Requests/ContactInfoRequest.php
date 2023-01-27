<?php

namespace Web\Aamsnm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactInfoRequest extends FormRequest
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
            'aamsnm_email' => 'nullable|email',
        ];
    }
}
