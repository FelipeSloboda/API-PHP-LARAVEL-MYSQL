<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
//use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // GET: SELECIONA TODOS OS CLIENTES
    public function index()
    {   
        // FAZ A BUSCA
        $clientesAll = Cliente::all();

        //RETORNA COM O PADRAO DEFINIDO NA RESOURCE
        return ClienteResource::collection($clientesAll);
    }

    // GET: SELECIONA UM CLIENTE ESPECÍFICO PELO ID
    public function show(Cliente $cliente)
    {
        // FAZ A BUSCA
        $clienteOne = Cliente::find($cliente);
    
        //RETORNA COM O PADRAO DEFINIDO NA RESOURCE
        return ClienteResource::collection($clienteOne);
    }

    // POST: CRIA NOVO CLIENTE
    public function store(ClienteRequest $request)
    {    
        // FAZ A CRIACAO SE FOR VALIDADO
        $cliente = Cliente::create($request->validated());

        //RETORNA COM O PADRAO DEFINIDO NA RESOURCE
        return new ClienteResource($cliente);
    }  

    // PUT: ATUALIZA UM CLIENTE ESPECÍFICO PELO ID
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        // FAZ A ATUALIZACAO SE FOR VALIDADO
        $cliente->update($request->validated());

        //RETORNA COM O PADRAO DEFINIDO NA RESOURCE
        return new ClienteResource($cliente);  
    }

    // DELETE: EXCLUI UM CLIENTE ESPECÍFICO PELO ID
    public function destroy(Cliente $cliente)
    {
        // FAZ A EXCLUSÃO
        $cliente->delete();
    }
}
