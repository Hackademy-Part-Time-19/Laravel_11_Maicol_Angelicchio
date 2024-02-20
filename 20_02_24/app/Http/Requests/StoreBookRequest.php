<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titolo'=>'required|max:20',
            'anno'=>'required|min:4|max:4',
            'genere'=>'required|max:20'
        ];
    }
    public function messages(){
        return[
            'titolo.required'=>'Inserire titolo',
            'anno.required'=>'Inserire anno di publicazione',
            'genere.required'=>'Inserire genere',
            'titolo.max'=>'Il titolo può essere lungo massimo 20 caratteri',
            'anno.min'=>'Anno di publicazione non valido',
            'anno.max'=>'Anno di publicazione non valido',
            'genere.max'=>'Il genere può essere lungo massimo 20 caratteri'
        ];
    }
}
