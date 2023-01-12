<?php

declare(strict_types=1);

namespace Eko\AuthzSdk;

use Authz\ApiClient;
use Authz\Check;
use Authz\CheckRequest;
use Eko\AuthzSdk\Interceptor\AuthenticationInterceptor;
use Grpc\{Channel,ChannelCredentials,Interceptor};

/**
 * Authz Client.
 * 
 * This client instanciates a gRPC client stub and provides some useful wrapper methods.
 */
class Client extends ApiClient {
    /**
     * @param string $address      An Authz backend hostname and port.
     * @param string $clientID     A service account client identifier.
     * @param string $clientSecret A service account client secret.
     */
    public function __construct(string $address, string $clientID, string $clientSecret) {
        if (!method_exists('Grpc\ChannelCredentials', 'isDefaultRootsPemSet')) {
            throw new \RuntimeException('gRPC PHP extension is not installed');
        }

        $channel = new Channel($address, []);

        $stub = new ApiClient($address, [
            'credentials' => ChannelCredentials::createInsecure(),
        ], $channel);

        $authenticationInterceptor = new AuthenticationInterceptor($stub, $clientID, $clientSecret);
        $interceptedChannel = Interceptor::intercept($channel, $authenticationInterceptor);

        parent::__construct($address, [
            'credentials' => ChannelCredentials::createInsecure(),
        ], $interceptedChannel);
    }

    /**
     * Check if a principal is allowed to perform an action on a resource.
     * 
     * @param string $principal
     * @param string $resourceKind
     * @param string $resourceValue
     * @param string $action
     * 
     * @return bool
     */
    public function IsAllowed(
        string $principal,
        string $resourceKind,
        string $resourceValue,
        string $action,
    ): bool
    {
        $request = new CheckRequest([
            'checks' => [
                new Check([
                    'principal' => $principal,
                    'resource_kind' => $resourceKind,
                    'resource_value' => $resourceValue,
                    'action' => $action,
                ]),
            ],
        ]);

        [$response,] = $this->Check($request)->wait();

        if (!$response) {
            return false;
        }

        return $response->getChecks()[0]->getIsAllowed();
    }
}
