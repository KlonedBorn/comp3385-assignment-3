<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'      => 'required|length:255',
            'email'     => 'required|email|length:255',
            'telephone' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/',
            'address'   => 'required|length:255',
            'logo'      => 'required|image|max:12288'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
