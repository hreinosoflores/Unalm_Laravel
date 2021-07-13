<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCursoRequest extends FormRequest
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
            'codigo'        =>array('required','regex:/^[A-Z]{2}[0-9]{4}$/'),
            'nombre'        =>'required',
            'creditos'      =>'required|integer|gt:0',
            'horas_teoria'  =>'required|integer|gt:0',
            'horas_practica'=>'required|integer',
            'sumilla'       =>'required'
        ];
    }


    public function messages(){
        return [
            'codigo.required'        =>'El curso necesita un código.',
            'nombre.required'        =>'El curso necesita un nombre.',
            'creditos.required'      =>'Se necesita asignarle créditos al curso.',
            'horas_teoria.required'  =>'Se necesita asignarle horas de teoría al curso.',
            'horas_practica.required'=>'Se necesita asignarle horas de práctica al curso. (colocar cero si no tiene).',
            'sumilla.required'       =>'El curso necesita una breve sumilla.',
            'codigo.regex'           =>'El código ingresado no coincide con el patrón "AA####".',
            'creditos.integer'       =>'Ingresar un numero entero',
            'horas_teoria.integer'   =>'Ingresar un numero entero',
            'horas_practica.integer' =>'Ingresar un numero entero',

        ];
    }
}
