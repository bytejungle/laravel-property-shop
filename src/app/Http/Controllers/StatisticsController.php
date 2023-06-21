<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    // get statistics
    public function getStatistics() {
        // get statistics
        $properties = DB::table('properties')->count('*');
        $countries = DB::table('countries')->count('*');
        $agents = DB::table('agents')->count('*');

        return [
            'data' => [
                'properties' => $properties,
                'countries' => $countries,
                'agents' => $agents,
            ],
        ];
    }
}
