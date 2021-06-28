<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Dados;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\DadosRequest;
use App\Http\Resources\Dados\DadosCollection;
use App\Http\Resources\Dados\DadosResource;

class DadosController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:api');
    }

    public function index()
    {
        return new DadosCollection(Dados::paginate(10));
    }


    public function store(DadosRequest $request)
    {
        $dados = new Dados([
            'cod_fornecedor' => $request->get('cod_fornecedor'),
            'cod_prod' => $request->get('cod_prod'),
            'cliente' => $request->get('cliente'),
            'documento' => $request->get('documento'),
            'nome_prod' => $request->get('nome_prod'),
            'nome_categoria' => $request->get('nome_categoria'),
            'nome_fornecedor' => $request->get('nome_fornecedor'),
            'valor_original' => $request->get('valor_original'),
            'data_compra' => $request->get('data_compra'),
            'valor_desconto' => $request->get('valor_desconto'),
            'valor_final' => $request->get('valor_final'),
            'data_pgto' => $request->get('data_pgto'),
            'data_devolucao' => $request->get('data_devolucao'),
            'status_situacao' => $request->get('status_situacao'),
            'status_pgto' => $request->get('status_pgto'),
            'taxa_aplicada' => $request->get('taxa_aplicada'),
            'taxa_original' => $request->get('taxa_original'),
        ]);
        
        $dados->save();
        
        return response([
           'data' => new DadosResource($dados)
        ], Response::HTTP_CREATED);
    }

    public function show(Dados $dados)
    {
        return new DadosResource($dados);
    }

    public function update(Request $request, Dados $dados)
    {
        $dados->update($request->all());
        return response([
            'data' => new DadosResource($dados)
        ], Response::HTTP_CREATED);
    }

    public function destroy(Dados $dados)
    {
        $this->isUserPost($dados);
        $dados->delete();
        return response([
            null
        ], Response::HTTP_NO_CONTENT);
    }

}