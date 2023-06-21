<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgentResource;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{

    // paginate agents
    public function paginateAgents() {
        $paginationSize = request()->get('size') ?? 6;
        return new AgentResource(Agent::paginate($paginationSize));
    }

    // get agent by id
    public function getAgent(string $id) {
        return new AgentResource(Agent::findOrFail($id));
    }

    // get top agents
    public function getTopAgents() {
        $topAgents = DB::table('properties')
        ->select(DB::raw('agent_id, count(*) as count'))
        ->groupBy('agent_id')
        ->orderByDesc('count')
        ->limit(5)
        ->get();

        return [
            'data' => [
                'agents' => $topAgents
            ],
        ];
    }
}
