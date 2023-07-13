<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        // Produto::create([
        Produto::insert([
            [
                'nome' => 'Victor Padovam',
                'valor' => '20.00',
            ],
            [
                'nome' => 'Aldo Pires',
                'valor' => '30.00',
            ],
            [
                'nome' => 'Stefany de Souza',
                'valor' => '30.00',
            ],
            [
                'nome' => 'Rosileide Rech',
                'valor' => '30.00',
            ],
        ]);
    }
}
