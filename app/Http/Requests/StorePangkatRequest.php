<?php

namespace App\Http\Requests;

use App\Models\Pangkat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePangkatRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pangkat_create');
    }

    public function rules()
    {
        return [
            'nama_pangkat' => [
                'string',
                'nullable',
            ],
        ];
    }
}
