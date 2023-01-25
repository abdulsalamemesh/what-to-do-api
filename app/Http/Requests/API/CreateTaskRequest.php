<?php

namespace App\Http\Requests\API;

use App\Enums\CategoriesEnum;
use App\Models\Language;
use App\Rules\KeysIn;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'language' => ['required', Rule::in(Language::KEYS)],
            'task'     => ['required', 'string', 'min:5'],
            'category' => ['required', Rule::in(CategoriesEnum::values())],
            'person'   => ['required', Rule::in(range(1, 10))],
            'cost'     => ['required', Rule::in(['free', '$', '$$', '$$$'])],
            'links'    => ['sometimes', 'array', new KeysIn(Language::KEYS)],
            'links.*'  => ['sometimes', 'url'],
        ];
    }
}
