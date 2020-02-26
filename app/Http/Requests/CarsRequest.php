<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
            'mark' => 'required|max:255',
            'model' => 'required'
        ];
    }

    public function messages(){
        return [
            'mark.required'=> 'Pole tytuł jest wymagane',
            'model.required'=> 'Pole treść jest wymagane'
        ];
    }
}
