<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Dados extends Model
{
    use Sluggable;

    protected $fillable = [
        'cod_fornecedor', 
        'cod_prod', 
        'cliente', 
        'documento', 
        'nome_prod', 
        'nome_categoria', 
        'nome_fornecedor', 
        'valor_original', 
        'data_compra', 
        'valor_desconto', 
        'valor_final', 
        'data_pgto', 
        'data_devolucao', 
        'status_situacao', 
        'status_pgto', 
        'taxa_aplicada', 
        'taxa_original'
    ];



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
