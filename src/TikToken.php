<?php

namespace DevelopersSavyour\TikToken;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TikToken
{
    protected $host;
    protected $port;
    protected $version;
    protected $client;

    public function __construct()
    {
        $this->host = config('tiktoken.host');
        $this->port = config('tiktoken.port');
        $this->version = '/api/v1';
        $this->client = new Client([
            'base_uri' => "http://{$this->host}:{$this->port}"
        ]);
    }
}
