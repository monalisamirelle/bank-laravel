<?php

namespace App\Repositories;

use App\Models\Conta;

class ContaRepository
{
    protected $conta;

    public function __construct(Conta $conta)
    {
        $this->conta = $conta;
    }
    
    public function all()
    {
        return Conta::all();
    }

    public function depositar($id, $request)
    {
        $conta = $this->conta->find($id);

        $response = [];

        $data = [
            "saldo" => $conta->saldo + $request["valor"]
        ];

        $this->conta->find($id)->update($data);

        $response = ["success" => "Deposito realizado com sucesso", "contas" => Conta::all()];

        return $response;
    }
    
    public function sacar($id, $request)
    {
        $conta = $this->conta->find($id);

        $response = [];

        if ($request["valor"] > $conta->saldo) {
            $response = ["error" => "Valor a ser sacado é maior que o saldo"];
        }
        else {
            $data = [
                "saldo" => $conta->saldo - $request["valor"]
            ];

            $this->conta->find($id)->update($data);

            $response = ["success" => "Saque realizado com sucesso"];
        }
        
        return $response;
    }
    
}
