<?php

namespace App\Http\Requests;

use App\Models\Tuga;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTugaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tuga_create');
    }

    public function rules()
    {
        return [
            'pukul' => [
                'date_format:' . config('project.time_format'),
                'nullable',
            ],
            'uraian_kegiatan' => [
                'string',
                'nullable',
            ],
            'hasil_output' => [
                'string',
                'nullable',
            ],
            'vol' => [
                'string',
                'nullable',
            ],
            'paraf_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
        ];
    }
}
