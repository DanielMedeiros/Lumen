<?php

namespace App\Http\Controllers;

use App\Clientes;

use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    public function ListaUsuario(){

    	$json = [

	         'usuario' =>[

	            'nome' => 'Daniel',
	            'idade' => '39'
	         ],
	         'usuario2' =>[

               'nome' => 'Joao',
               'idade' => '34'
              ],
              'usuario3' =>[

               'nome' => 'Maria',
               'idade' => '19'
              ]

    	];

        return response($json, 201)->header('Content-type', 'application/json');
    }


    public function ListaClientes()
    {
      //return Clientes::all();
      $clientes = Clientes::all();

      return response($clientes, 201)->header('Content-type', 'application/json');
    }

    public function ListaCliente($id)
    {
      //return Clientes::all();
      $cliente = Clientes::find($id);

      return response($cliente, 201)->header('Content-type', 'application/json');
    }

    public function CadastraCliente(Request $data)
    {
      $cliente = Clientes::create([
          'nome' => $data->nome,
          'cnpj' => $data->cnpj

      ]);

      return response($cliente, 201)->header('Content-type', 'application/json');
    }

    public function DeleteCliente($id)
    {
      $cliente = Clientes::find($id);

      $cliente->delete();

      return response($cliente, 201)->header('Content-type', 'application/json');
    }

     public function AlteraCliente(Request $data)
    {
      dd($data->request);
      $cliente = Clientes::find($data->id);

      $cliente->nome = $data->nome;
      $cliente->cnpj = $data->cnpj;

      $cliente->save();

      return response($cliente, 201)->header('Content-type', 'application/json');
    }


}
