<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    // paginate properties
    public function paginateProperties() {
        $paginationSize = request()->get('size') ?? 6;

        // get query parameters
        $countryId = request()->get('country') ?? null;
        $bedroomCount = request()->get('bedroom_count') ?? 0;
        $bathroomCount = request()->get('bathroom_count') ?? 0;
        $carSpaceCount = request()->get('car_count') ?? 0;

        $properties = Property::where('bedroom_count', '>=', $bedroomCount)
            ->where('bathroom_count', '>=', $bathroomCount)
            ->where('car_count', '>=', $carSpaceCount)
            ->when($countryId, function ($query, $countryId) {
                $query->where('country_id', '=', $countryId);
            })
            ->paginate($paginationSize);

        return new PropertyResource($properties);
    }

    // get property by id
    public function getProperty(string $id) {
        return new PropertyResource(Property::findOrFail($id));
    }
}
