<?php

namespace UpCloud;

use RuntimeException;

require_once 'Version.php';

/**
 * UpCloud API client. The main class for connecting to the UpCloud API.
 */
class ApiClient
{
    use ServerApiTrait;
    use ServerFirewallApiTrait;
    use StorageApiTrait;
    // use AccountApiTrait;
    // use PriceApiTrait;
    // use PlanApiTrait;
    // use TagApiTrait;
    // use TimezoneApiTrait;

    /**
     * Root URL for the UpCloud API
     */
    protected $apiRoot = "https://api.upcloud.com/1.3/";

    /**
     * The HTTP client for making the requests
     * @var \UpCloud\HttpClient
     */
    protected $httpClient;

    public function __construct(array $config = null)
    {
        $username = $config['username'] ?? getenv('UPCLOUD_USERNAME');
        $password = $config['password'] ?? getenv('UPCLOUD_PASSWORD');

        if (empty($username)) {
            throw new RuntimeException('Please provide your UpCloud account username');
        }

        if (empty($password)) {
            throw new RuntimeException('Please provide your UpCloud account password');
        }

        $this->httpClient = $config['client'] ?? new HttpClient([
            'apiRoot' => $this->apiRoot,
            'password' => $password,
            'username' => $username,
        ]);
    }

    /**
     * Send a raw HTTP request
     */
    public function request(string $method, string $path, string $body)
    {
        return $this->httpClient->request($method, $path, $body);
    }
}
