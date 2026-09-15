<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Usuario::updateOrCreate(
            ['email' => 'admin@smartroom.test'],
            [
                'nome' => 'Administrador',
                'cpf' => '00000000000',
                'data_nascimento' => '1990-01-01',
                'senha' => 'password',
            ]
        );
    }
}
