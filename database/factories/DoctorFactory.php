<?php

namespace Database\Factories;

use App\Models\Doctor;
use Faker\Generator as Faker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        //      'user_id' =>function (Faker $faker) {
        //     return factory(User::class)->create(['role' => 'doctor'])->id;
        // },
        // 'name' => $faker->name,
        // 'specialization' => $faker->jobTitle,
        // 'schedule' => $faker->time,
        ];
    }
}
