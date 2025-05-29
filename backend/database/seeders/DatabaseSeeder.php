<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@9example.com',
        //     'password' => bcrypt('123456'),
        //     'number' => '98984212805',
        //     'cpf' => '090.000.000-00',
        //     'cnpj' => '00.000.000/0001-00',
        // ]);

        Role::factory()->create([
            'name' => 'Admin',
        ]);
    }
}
