<?php

namespace App\Services;

use App\Models\Conta;
use App\Repositories\ContaRepository;
use Illuminate\Http\Request;

class ContaService
{
	public function __construct(ContaRepository $conta)
	{
		$this->conta = $conta ;
	}

	public function index()
	{
		return $this->conta->all();
	}

	public function depositar(Request $request, $id)
	{
	  $attributes = $request->all();
      return $this->conta->depositar($id, $attributes);
	}
    
    public function sacar(Request $request, $id)
	{
	  $attributes = $request->all();
      return $this->conta->sacar($id, $attributes);
	}
}