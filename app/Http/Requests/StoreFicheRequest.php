<?php

namespace App\Http\Requests;

use App\Validator\NoSpam;
use Illuminate\Foundation\Http\FormRequest;

class StoreFicheRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nom'              => ['required', 'string', 'max:255', new NoSpam(['alphaOnly' => true])],
            'prenom'           => ['required', 'string', 'max:255', new NoSpam(['alphaOnly' => true])],
            'raison_sociale'   => ['nullable', 'string', 'max:255', new NoSpam(['alphaOnly' => true])],
            'activite'         => ['nullable', 'in:OUI,NON'],
            'assure'           => ['nullable', 'in:OUI,NON'],
            'ancienne'         => ['nullable', 'in:OUI,NON'],
            'motif'            => ['nullable', 'string', 'max:255', new NoSpam(['alphaOnly' => true])],
            'code'             => ['nullable', 'string', 'max:5', 'regex:/^[0-9]+$/'],
            'email'            => ['required', 'email', 'max:255', new NoSpam()],
            'tele'             => ['required', 'string', 'max:10', 'min:10', 'regex:/^[0-9]+$/'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required'     => 'Le nom est obligatoire.',
            'prenom.required'  => 'Le prénom est obligatoire.',
            'email.required'   => 'L\'email est obligatoire.',
            'email.email'      => 'L\'email n\'est pas valide.',
            'tele.required'    => 'Le téléphone est obligatoire.',
            'tele.max'         => 'Le téléphone doit contenir 10 chiffres.',
            'tele.min'         => 'Le téléphone doit contenir 10 chiffres.',
            'tele.regex'       => 'Le téléphone ne doit contenir que des chiffres.',
            'code.max'         => 'Le code postal ne doit pas dépasser 5 caractères.',
            'code.regex'       => 'Le code postal ne doit contenir que des chiffres.',
        ];
    }
}
