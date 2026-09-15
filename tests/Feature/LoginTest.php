<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in_with_valid_credentials(): void
    {
        Usuario::create([
            'nome' => 'Administrador',
            'email' => 'admin@smartroom.test',
            'cpf' => '00000000000',
            'data_nascimento' => '1990-01-01',
            'senha' => 'password',
        ]);

        $response = $this->post('/login', [
            'email' => 'admin@smartroom.test',
            'senha' => 'password',
        ]);

        $response->assertRedirect('/admin');
        $response->assertSessionHas('status', 'Login realizado com sucesso. Bem-vindo, Administrador!');
        $this->assertAuthenticatedAs(Usuario::first());
    }

    public function test_user_cannot_log_in_with_invalid_credentials(): void
    {
        $response = $this->from('/login')->post('/login', [
            'email' => 'admin@smartroom.test',
            'senha' => 'wrong-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }
}
