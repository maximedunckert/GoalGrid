<?php
// app/Services/WorldCupService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WorldCupService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.wc2026.base_url');
        $this->apiKey  = config('services.wc2026.api_key');
    }

    protected function get(string $endpoint, array $params = []): array
    {
        $response = Http::withToken($this->apiKey)
            ->get("{$this->baseUrl}/{$endpoint}", $params);

        $response->throw(); // throws on 4xx/5xx

        return $response->json();
    }

    public function getMatches(array $filters = []): array
    {
        return $this->get('matches', $filters);
    }

    public function getStandings(): array
    {
        return $this->get('standings');
    }

    public function getMatchesByTeam(string $team): array
    {
        return $this->get('matches', ['team' => $team]);
    }
}