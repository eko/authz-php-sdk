<?php

namespace Eko\AuthzSdk\Interceptor;

use Authz\ApiClient;
use Authz\AuthenticateRequest;

class AuthenticationInterceptor extends \Grpc\Interceptor
{
    private string|null $token = null;
    private \DateTime $expireAt;

    public function __construct(
        private ApiClient $stub,
        private string $clientId,
        private string $clientSecret,
    ) {}

    public function interceptUnaryUnary(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = [],
    )
    {
        if ($this->isTokenExpired()) {
            $this->authenticate();
        }

        if ($this->token) {
            $metadata['authorization'] = ['Bearer ' . $this->token];
        }

        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }

    public function interceptUnaryStream(
        $method,
        $argument,
        $deserialize,
        $continuation,
        array $metadata = [],
        array $options = []
    ) {
        if ($this->isTokenExpired()) {
            $this->authenticate();
        }

        if ($this->token) {
            $metadata['authorization'] = ['Bearer ' . $this->token];
        }

        return $continuation($method, $argument, $deserialize, $metadata, $options);
    }

    private function isTokenExpired(): bool
    {
        if (!$this->token || !$this->expireAt) {
            return true;
        }

        $now = new \DateTime();

        return $this->expireAt >= $now;
    }

    private function authenticate(): void
    {
        [$response, $status] = $this->stub->Authenticate(new AuthenticateRequest([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]))->wait();

        if ($response) {
            $this->token = $response->getToken();
            $this->expireAt = (new \DateTime())->modify("+{$response->getExpiresIn()} seconds");
        }
    }
}