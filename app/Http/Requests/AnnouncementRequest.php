<?php

namespace App\Http\Requests;

use App\Errors;

use Illuminate\Foundation\Http\FormRequest;


class AnnouncementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [];
        $method = $this->method();

        $rules = [
            'title'     => 'required|min:8|max:32',
            'content'   => 'required'
        ];

        return $rules;
    }
}