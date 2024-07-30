<?php

namespace App\Http\Requests\Guest;

use App\Rules\CountryExist;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGuestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'first_name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[А-яA-z\s-]+$/u'],
            'last_name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[А-яA-z\s-]+$/u'],
            'phone' => ['required', 'string', 'min:10', 'max:20', 'regex:/^\+\d{10,20}$/',
                Rule::unique('guests', 'phone')->ignore($id, 'id')],
            'email' => ['required', 'email', 'min:7', 'max:255',
                Rule::unique('guests', 'email')->ignore($id, 'id')],
            'country' => ['string', 'size:2', new CountryExist()],
        ];
    }
}
