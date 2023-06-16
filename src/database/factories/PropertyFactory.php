<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $bedroomCount = random_int(1, 5);
        $bathroomCount = random_int(1, 3);
        $carCount = random_int(1, 4);

        // create description
        $descriptionFormat = 'This property has @bedrooms bedrooms, @bathrooms bathrooms, @cars car ports. Contact us to book an inspection!';
        $description = strtr($descriptionFormat, [
            '@bedrooms' => $bedroomCount,
            '@bathrooms' => $bathroomCount,
            '@cars' => $carCount
        ]);

        // created listed at date
        $now = Carbon::now();
        $sixMonthsAgo = Carbon::now()->subMonths(6);
        $listedAt = fake()->dateTimeBetween($sixMonthsAgo, $now);

        return [
            'bedroom_count' => $bedroomCount,
            'bathroom_count' => $bathroomCount,
            'car_count' => $carCount,
            'description' => $description,
            'street_address' => fake()->streetAddress(),
            'price' => random_int(120000, 6000000),
            'listed_at' => $listedAt
        ];
    }
}
