<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\Support\Str;

class PutRequest extends FormRequest
{
    
    static public function myRules()
    {
        return[
            "title" => "required|min:5|max:500",
            //"slug" => "required|min:5|max:500|unique:posts",
            "content" => "required|min:7",
            "category_id" => "required|integer",
            "description" => "required|min:7",
            "posted" => "required",
        ];
    }
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return $this->myRules();
    }
}
