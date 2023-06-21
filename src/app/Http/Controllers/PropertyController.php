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
        return new PropertyResource(Property::paginate($paginationSize));
    }

    // get property by id
    public function getProperty(string $id) {
        return new PropertyResource(Property::findOrFail($id));
    }
}
