<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'password' => [
                'nullable',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'nip' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'tanda_tangan' => [
                'array',
                'nullable',
            ],
            'tanda_tangan.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
