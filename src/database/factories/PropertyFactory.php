<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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

        // get random country
        $country = Country::orderBy(DB::raw('RAND()'))
            ->limit(1)
            ->get()
            ->first();

        // get random agent
        $agent = Agent::orderBy(DB::raw('RAND()'))
            ->limit(1)
            ->get()
            ->first();

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
            'country_id' => $country->id,
            'agent_id' => $agent->id,
            'views' => random_int(10, 600),
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
