<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckLengthRule;

class HammingDistanceRequest extends FormRequest
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
            'strOne' => ['required', 'string', new CheckLengthRule($this->strTwo)],
            'strTwo' => ['required', 'string', new CheckLengthRule($this->strOne)],
        ];
    }
}
