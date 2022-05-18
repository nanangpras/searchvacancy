<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'name' => 'required|string',
            'no_telp' => 'required|min:10|max:13',
            'no_wa' => 'required|min:12|max:13',
            'position' => 'required|string',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'no_telp.required' => 'No telp harus di isi',
            'no_telp.min:10' => 'No telp minimal 10 digit',
            'no_telp.min:13' => 'No telp maksimal 13 digit',
            'no_wa.required' => 'No telp harus di isi',
            'no_wa.min:12' => 'No telp minimal 10 digit',
            'no_wa.min:13' => 'No telp maksimal 13 digit',
            'position.required' => 'Position harus diisi',

        ];
    }
}
