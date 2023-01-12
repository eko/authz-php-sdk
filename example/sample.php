<?php

declare(strict_types=1);

use Authz\Attribute;
use Authz\PolicyCreateRequest;
use Authz\PolicyGetRequest;
use Eko\AuthzSdk\Client;
use Authz\PrincipalCreateRequest;
use Authz\PrincipalGetRequest;
use Authz\ResourceCreateRequest;
use Authz\ResourceGetRequest;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client('localhost:8081', '6f1d14ec-941c-11ed-bbbd-faffc22d4a73', 'bBJl4R4t08LWlmxs_DgPmlo4KLnxYLkZLjiSiHqOW_Jb19_M');

// Retrieve or create principal
[$response, $status] = $client->PrincipalGet(new PrincipalGetRequest([
    'id' => 'user-123',
]))->wait();

if ($response) {
    echo sprintf("Principal retrieved: %s\n", $response->getPrincipal()->getId());
} else {
    [$response, $status] = $client->PrincipalCreate(new PrincipalCreateRequest([
        'id' => 'user-123',
        'attributes' => [
            new Attribute(['key' => 'email', 'value' => 'johndoe@acme.tld']),
        ],
    ]))->wait();    

    if ($response) {
        echo sprintf("Principal created: %s\n", $response->getPrincipal()->getId());
    } else {
        echo sprintf("Error while trying to create principal: %s\n", $status->details);
    }
}

// Retrieve or create resource
[$response, $status] = $client->ResourceGet(new ResourceGetRequest([
    'id' => 'post.123',
]))->wait();

if ($response) {
    echo sprintf("Resource retrieved: %s\n", $response->getResource()->getId());
} else {
    [$response, $status] = $client->ResourceCreate(new ResourceCreateRequest([
        'id' => 'post.123',
        'kind' => 'post',
        'value' => '123',
        'attributes' => [
            new Attribute(['key' => 'owner_email', 'value' => 'johndoe@acme.tld']),
        ],
    ]))->wait();    

    if ($response) {
        echo sprintf("Resource created: %s\n", $response->getResource()->getId());
    } else {
        echo sprintf("Error while trying to create resource: %s\n", $status->details);
    }
}

// Retrieve or create policy
[$response, $status] = $client->PolicyGet(new PolicyGetRequest([
    'id' => 'post-owners',
]))->wait();

if ($response) {
    echo sprintf("Policy retrieved: %s\n", $response->getPolicy()->getId());
} else {
    [$response, $status] = $client->PolicyCreate(new PolicyCreateRequest([
        'id' => 'post-owners',
        'resources' => ['post.*'],
        'actions' => ['edit', 'delete'],
        'attribute_rules' => [
            'principal.email == resource.owner_email',
        ],
    ]))->wait();    

    if ($response) {
        echo sprintf("Policy created: %s\n", $response->getPolicy()->getId());
    } else {
        echo sprintf("Error while trying to create policy: %s\n", $status->details);
    }
}

// Check if principal is allowed
$isAllowed = $client->IsAllowed(
    principal: 'user-123',
    resourceKind: 'post',
    resourceValue: '123',
    action: 'edit',
);

if ($isAllowed) {
    echo 'Principal is allowed!';
}
