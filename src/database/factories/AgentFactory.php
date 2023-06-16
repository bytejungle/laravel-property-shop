<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $gender = random_int(0, 1);
        $gender = $gender ? 'male' : 'female';

        // created last seen at date
        $now = Carbon::now();
        $threeDaysAgo = Carbon::now()->subDays(3);
        $lastSeenAt = fake()->dateTimeBetween($threeDaysAgo, $now);

        return [
            'gender' => $gender,
            'first_name' => fake()->firstName($gender),
            'last_name' => fake()->lastName(),
            'mobile_number' => fake()->e164PhoneNumber(),
            'last_seen_at' => $lastSeenAt,
        ];
    }
}
