<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    // paginate countries
    public function paginateCountries()
    {
        $paginationSize = request()->get('size') ?? 6;
        $getAll = request()->exists('all');

        if ($getAll) {
            return new CountryResource(Country::all());
        } else {
            $paginationSize = request()->get('size') ?? 6;
            return new CountryResource(Country::paginate($paginationSize));
        }
    }

    // get country by id
    public function getCountry(string $id)
    {
        return new CountryResource(Country::findOrFail($id));
    }
}
