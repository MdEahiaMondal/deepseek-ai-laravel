<?php

namespace eahiya\DeepSeekAI\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class DeepSeekAIClient
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct($apiKey, $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function chat(array $messages, $model = 'deepseek-chat')
    {
        try {
            $response = $this->client->post('chat/completions', [
                'json' => [
                    "model" => $model,
                    'messages' => $messages,
                ],
            ]);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }
}