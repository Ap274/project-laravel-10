<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // A propriedade $fillable é definida com um array de campos permitidos para atribuição em massa (mass assignment). 
    // Isso significa que os campos listados nessa propriedade podem ser atribuídos em uma única operação, como por exemplo, 
    // ao criar ou atualizar registros do modelo. A estrutura tem que ser igual ao migration
    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    public function getClientesPesquisarIndex(string $search='') 
    {
        $cliente = $this->where(function($query) use ($search) {
            if($search) {
                $query->where('nome', $search);
                $query->orWhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();

        return $cliente;
    }
}
