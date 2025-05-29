<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'number' => fake()->randomNumber(),
            'cpf' => $this->gerarCpfFalso(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    function gerarCpfFalso(): string {
        $n = [];
        for ($i = 0; $i < 9; $i++) {
            $n[$i] = rand(0, 9);
        }

        $d1 = 0;
        for ($i = 0, $j = 10; $i < 9; $i++, $j--) {
            $d1 += $n[$i] * $j;
        }
        $d1 = $d1 % 11;
        $n[9] = $d1 < 2 ? 0 : 11 - $d1;

        $d2 = 0;
        for ($i = 0, $j = 11; $i < 10; $i++, $j--) {
            $d2 += $n[$i] * $j;
        }
        $d2 = $d2 % 11;
        $n[10] = $d2 < 2 ? 0 : 11 - $d2;

        return implode('', $n);
    }

}
