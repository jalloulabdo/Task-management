<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;

class MembreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * The route that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirectRoute = 'membres';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                'email'
            ]

        ];
        if ($this->getMethod() == "POST") {
            $rules += [

                'image' => [
                    'max:2048'
                ],
            ];
        }
        if ($this->getMethod() == "PUT") {
            $rules += [

                'image' => [
                    'max:2048'
                ],
            ];
        }
        return  $rules;
    }

    public function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name',
            'name.eamil'     => 'Please enter email'
        ];
    }
}
