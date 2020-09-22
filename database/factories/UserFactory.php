<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Bid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->username,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'points' => $this->faker->numberBetween($min = 0, $max = 100),
            'years_ihg' => $this->faker->numberBetween($min = 0, $max = 4)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            for ($i = 1; $i <= 5; $i++) {
                Bid::factory()->state([
                    'user_id' => $user->id,
                    'number_id' => rand(1, 100),
                    'priority' => $i
                ])->create();
            }
        });
    }
}
