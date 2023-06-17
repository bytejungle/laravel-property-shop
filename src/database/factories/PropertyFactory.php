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

    private static $propertyImages = [
        "https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=30",
        "https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?q=30",
        "https://images.unsplash.com/photo-1584738766473-61c083514bf4?q=30",
        "https://images.unsplash.com/photo-1592595896551-12b371d546d5?q=30",
        "https://images.unsplash.com/photo-1480074568708-e7b720bb3f09?q=30",
        "https://images.unsplash.com/photo-1625602812206-5ec545ca1231?q=30",
        "https://images.unsplash.com/photo-1628624747186-a941c476b7ef?q=30",
        "https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?q=30",
        "https://images.unsplash.com/photo-1592595896616-c37162298647?q=30",
        "https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=30",
        "https://images.unsplash.com/photo-1571939228382-b2f2b585ce15?q=30",
        "https://images.unsplash.com/photo-1599427303058-f04cbcf4756f?q=30",
        "https://images.unsplash.com/photo-1600585152220-90363fe7e115?q=30",
        "https://images.unsplash.com/photo-1588854337236-6889d631faa8?q=30",
        "https://images.unsplash.com/photo-1556912173-3bb406ef7e77?q=30",
        "https://images.unsplash.com/photo-1588854337221-4cf9fa96059c?q=30",
        "https://images.unsplash.com/photo-1574739782594-db4ead022697?q=30",
        "https://images.unsplash.com/photo-1565183928294-7063f23ce0f8?q=30",
        "https://images.unsplash.com/photo-1540518614846-7eded433c457?q=30",
        "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=30",
        "https://images.unsplash.com/photo-1541123356219-284ebe98ae3b?q=30",
        "https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?q=30",
        "https://images.unsplash.com/photo-1570737209810-87a8e7245f88?q=30",
        "https://images.unsplash.com/photo-1574873215043-44119461cb3b?q=30",
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // get random image
        $imageUrl = self::$propertyImages[array_rand(self::$propertyImages)];

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
            'image_url' => $imageUrl,
            'price' => random_int(120000, 6000000),
            'listed_at' => $listedAt
        ];
    }
}
