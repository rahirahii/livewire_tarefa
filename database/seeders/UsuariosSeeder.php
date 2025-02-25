<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cidade = collect([
            'Presidente Epitácio', 'Rio de Janeiro',
            'São José do Rio Preto', 'Londrina', 'Maringá', 'Dourados',
            'Campinas', 'Brasilia', 'Riberão Preto', 'Sorocaba'
        ]);

        $estados = collect(['Espírito Santo', 'Minas Gerais', 'Rio de Janeiro', 'São Paulo', 'Distrito Federal', 'Tocantis']);
        for ($i = 0; $i <= 400; $i++) {

           

            Usuarios::create([
                'nome' => 'Ana '.$i,
                'email' => 'ana'.$i.'@senai.br',
                'celular' => ' 18 9825687',
                'estado_civil' => 'Solteira',
                'data_nascimento' => rand(1990, 2005). '-' .  rand(1, 12). '-' . rand(1,28),
                'cidade' => $cidade->random(),
                'estado' => $estados->random(),
                'endereco' => 'Sebastião Ferreira dos Santos ',
                'cep' => '194700000',
                'password' => '23456789'
            ]);
        }
    }
}
