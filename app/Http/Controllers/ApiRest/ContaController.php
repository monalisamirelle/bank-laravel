<?php

namespace App\Http\Controllers\ApiRest;

use App\Http\Controllers\Controller;
use App\Services\ContaService;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    protected $contaservice;

	public function __construct(ContaService $contaservice)
	{
		$this->contaservice = $contaservice;
	}
    
    public function index() {
        $contas = $this->contaservice->index();
        return response()->json(["contas" => $contas]);
    }

    public function depositar(Request $request, $id)
    {
        $contas = $this->contaservice->depositar($request, $id);
        return response()->json(["response" => $contas]);
    }
    
    public function sacar(Request $request, $id)
    {
        $contas = $this->contaservice->sacar($request, $id);
        return response()->json(["response" => $contas]);
    }

}
