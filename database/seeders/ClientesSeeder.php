<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::insert([
            [
                'nome' => 'Victor Padovam',
                'email' => 'victor@gmail.com',
                'endereco' => 'Rua 125',
                'logradouro' => 'Rua 125',
                'cep' => '22589603-85',
                'bairro' => 'Upper East Side',
            ],
            [
                'nome' => 'Aldo Pires',
                'email' => 'aldo@gmail.com',
                'endereco' => 'Rua 225',
                'logradouro' => 'Rua 225',
                'cep' => '22589603-88',
                'bairro' => 'Tribeca',
            ],
            [
                'nome' => 'Stefany de Souza',
                'email' => 'stefany@gmail.com',
                'endereco' => 'Rua 335',
                'logradouro' => 'Rua 335',
                'cep' => '22589603-90',
                'bairro' => 'Soho',
            ],
            [
                'nome' => 'Rosileide Rech',
                'email' => 'rosileide@gmail.com',
                'endereco' => 'Rua 445',
                'logradouro' => 'Rua 445',
                'cep' => '22589603-99',
                'bairro' => 'Upper West Side',
            ],
        ]);

        // Depois de criá-lo, especificar em DatabaseSeeder!
    }
}
