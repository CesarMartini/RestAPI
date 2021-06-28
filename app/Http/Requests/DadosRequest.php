<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DadosRequest extends FormRequest
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
            'cod_fornecedor' => 'required',
            'cod_prod' => 'required',
            'cliente' => 'required|max:255',
            'documento' => 'required',
            'nome_prod' => 'required|max:255',
            'nome_categoria' => 'required|max:255',
            'nome_fornecedor' => 'required|max:255',
            'valor_original' => 'required',
            'data_compra' => 'required',
            'valor_desconto' => 'required',
            'valor_final' => 'required',
            'data_pgto' => 'required',
            'data_devolucao' => 'required',
            'status_situacao' => 'required',
            'status_pgto' => 'required',
            'taxa_aplicada' => 'required',
            'taxa_original' => 'required',
        ];
    }
}
