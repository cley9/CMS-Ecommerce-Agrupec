<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class suscripcionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            // 'emailSub' => 'required|min:1|max:150',
            // 'description' => 'required|min:1|max:150',
            // 'state' => 'required|int|boolean',
            // 'Categories_id' => 'required|integer|max:200',
            // 'name' => 'required|min:1|max:150',
            // 'description' => 'required|min:1|max:150',
            // 'state' => 'required|int|boolean',
            // 'Categories_id' => 'required|integer|max:200',
        ];
    }
}
