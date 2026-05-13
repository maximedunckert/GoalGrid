<?php
// app/Services/WorldCupService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

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
        $cacheKey = 'wc_' . $endpoint . '_' . md5(serialize($params));

        return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($endpoint, $params) {
            $response = Http::withToken($this->apiKey)
                ->get("{$this->baseUrl}/{$endpoint}", $params);

            $response->throw();

            return $response->json();
        });
    }

    public function getMatches(array $filters = []): array
    {
        return $this->get('matches', $filters);
    }

    public function getStandings(): array
    {
        return $this->get('standings');
    }
}