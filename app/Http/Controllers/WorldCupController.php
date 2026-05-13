<?php
// app/Http/Controllers/WorldCupController.php

namespace App\Http\Controllers;

use App\Services\WorldCupService;
use Illuminate\Http\JsonResponse;

class WorldCupController extends Controller
{
    public function __construct(protected WorldCupService $wc) {}

    public function matches(): JsonResponse
    {
        $matches = $this->wc->getMatches();
        return response()->json($matches);
    }

    public function standings(): JsonResponse
    {
        return response()->json($this->wc->getStandings());
    }
}