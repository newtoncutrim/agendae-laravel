<?php

namespace Tests\Feature\App;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_be_registered_and_has_role()
    {
        $role = Role::create(['name' => 'cliente']);

        $userData = [
            'name' => 'João da Silva',
            'email' => 'joao@example.com',
            'password' => 'senha123',
            'number' => '999999999',
            'cpf' => '12345678901',
            'cnpj' => '12345678000199',
            'role' => 'cliente',
        ];

        $response = $this->post('/api/register', $userData);

        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Usuário criado com sucesso!',
                     'user' => [
                         'email' => 'joao@example.com',
                     ],
                 ]);

        $this->assertDatabaseHas('users', [
            'email' => 'joao@example.com',
            'cpf' => '12345678901',
        ]);


        $user = User::where('email', 'joao@example.com')->first();
        $this->assertTrue($user->roles->contains('id', $role->id));
    }
}
