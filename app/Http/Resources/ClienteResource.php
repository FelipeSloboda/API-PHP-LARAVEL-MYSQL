<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'ID:' => $this->id,
            'STATUS:' => $this->status,
            'CPF:' => $this->cpf,
            'NOME:' => $this->nome,
            'SOBRENOME:' => $this->sobrenome,
            'DATA NASC:' => $this->nascimento,
            'EMAIL:' => $this->email,
            'TELEFONE' => $this->telefone,
            'SEXO' => $this->sexo,
            'CEP' => $this->cep,
        ];
    }
}
