<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskRequest extends Request
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
            'name'        => 'required|min:4',
            'description' => 'required|word_count:5, 100',
            'dead_line'   => 'required|date|after:today'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.min'      => '4 caractères minimum',
            'name.required' => 'Un nom de tâche est requis',
            'description.required'   => 'Une description de la tâche est requise',
            'description.word_count'  => 'La description doit contenir entre 5 et 100 mots',
            'dead_line.required'     => 'Une date limite est requise',
            'dead_line.after'        => 'La date ne peut être inférieure à demain'
        ];
    }
}
