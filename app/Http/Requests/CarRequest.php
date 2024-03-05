<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'name'=> 'required',
            'model'=> 'required|min:1',
            'condition'=> 'required|min:5',
            'price'=> 'required|numeric',
            'image'=> 'required|image|mimes:jpg,bmp,png',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'Il campo marca è obbligatorio',
            'name.max'=> 'la marca deve avere massimo 10 caratteri',
            'model.required'=> 'Il campo del modello è obbligatorio',
            'model.min'=> 'Il modello deve avere almeno 1 carattere',
            'condition.required'=> 'Il campo della condizione dell\'auto è obbligatorio',
            'codition.min'=> 'Inserisci almeno 5 caratteri',
            'price.required'=> 'Il campo del prezzo di vendita è obbligatorio',
            'image.required'=> 'E\' obbligatorio una foto dell\'auto',
            'image.image'=> 'L\'immagine deve essere in jpeg,bpm o png',

        ];
    }
}
