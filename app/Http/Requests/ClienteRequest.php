<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    // ATIVAR VALIDACAO
    public function authorize(): bool
    {
        return true; 
    }

    // REGRAS DE VALIDACAO DO CLIENTE
    public function rules(): array
    {
        return [
            'status' => ['required', 'numeric', 'size:1'],
            'cpf' => ['required', 'unique:clientes', 'size:11'],
            'nome' => ['required', 'alpha', 'min:1', 'max:60'],
            'sobrenome' => ['required', 'alpha', 'min:1', 'max:60'],
            'nascimento' => ['required', 'date'],
            'email' => ['required', 'unique:clientes', 'email'], 
            'telefone' => ['required', 'unique:clientes', 'size:12'],
            'sexo' => ['required', 'alpha', 'size:1'],
            'cep' => ['required', 'size:8'],
        ];
    }    
}
