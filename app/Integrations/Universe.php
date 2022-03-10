<?php

namespace App\Integrations;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class Universe
{
    protected $apiKey;
    protected $baseUrl;
    protected $authToken;
    protected $userEmail;

    public function __construct()
    {
        $this->initialize();
    }

    public function initialize()
    {
        // Get the current
        $this->apiKey = config('universe.apiKey');
        $this->baseUrl = config('universe.baseUrl');
        $this->userEmail = config('universe.userEmail');

        // Login to Universe API to get the auth token
        $this->authToken = $this->authenticate();
    }

    public function getCountries()
    {
        $url = $this->baseUrl . '/countries';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->authToken,
            'Accept' => 'application/json',
        ])
            ->get($url)
            ->json();

        return $response;
    }

    public function getStates(string $country)
    {
        $url = $this->baseUrl . '/states/' . $country;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->authToken,
            'Accept' => 'application/json',
        ])
            ->get($url)
            ->json();

        return $response;
    }

    protected function authenticate()
    {
        // Get the auth token from cache
        // $authToken = Cache::get('authToken');

        $url = $this->baseUrl . '/getaccesstoken';

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'api-token' => $this->apiKey,
            'user-email' => $this->userEmail,
        ])
            ->get($url)
            ->json();

        return $response['auth_token'];
    }
}
