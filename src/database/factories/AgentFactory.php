<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        // create name and email
        $firstName = fake()->firstName($gender);
        $lastName = fake()->lastName();

        $emailAddressFormat = '@firstName.@lastName@@domain';
        $emailAddress = strtr($emailAddressFormat, [
            '@firstName' => fake()->firstName($gender),
            '@lastName' => fake()->lastName(),
            '@domain' => fake()->freeEmailDomain(),
        ]);

        // create image url
        $imageUrlFormat = 'https://api.dicebear.com/6.x/initials/svg?seed=@seed';
        $imageUrl = strtr($imageUrlFormat, [
            '@seed' => $firstName,
        ]);

        return [
            'gender' => $gender,
            'first_name' => Str::lower($firstName),
            'last_name' => Str::lower($lastName),
            'mobile_number' => fake()->e164PhoneNumber(),
            'email_address' => Str::Lower($emailAddress),
            'image_url' => $imageUrl,
            'last_seen_at' => $lastSeenAt,
        ];
    }
}
