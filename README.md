# Authz PHP SDK

This is the Authz development kit for PHP.

## Installation

You can install the SDK in your project by adding the following dependency:

```bash
$ composer require eko/authz-sdk
```

⚠️  Please note that you will need to install the [`grpc` PHP extension](https://cloud.google.com/php/grpc).

## Usage

You have to instanciate a new Authz Client in your code by doing:

```php
<?php
use Eko\AuthzSdk\Client;

$client = new Client('localhost:8081', '<client_id>', '<client_secret>');
```

Once the client is instanciate, you have access to all the gRPC methods.

In order to create a new Principal, you can use

```php
[$response, $status] = $client->PrincipalCreate(new PrincipalCreateRequest([
    'id' => 'user-123',
    'attributes' => [
        new Attribute(['key' => 'email', 'value' => 'johndoe@acme.tld']),
    ],
]))->wait();
```

To declare a new resource:

```php
[$response, $status] = $client->ResourceCreate(new ResourceCreateRequest([
    'id' => 'post.123',
    'kind' => 'post',
    'value' => '123',
    'attributes' => [
        new Attribute(['key' => 'owner_email', 'value' => 'johndoe@acme.tld']),
    ],
]))->wait();
```

You can also declare a new policy this way:

```php
[$response, $status] = $client->PolicyCreate(new PolicyCreateRequest([
    'id' => 'post-owners',
    'resources' => ['post.*'],
    'actions' => ['edit', 'delete'],
    'attribute_rules' => [
        'principal.email == resource.owner_email',
    ],
]))->wait();
```

Then, you can perform a check with:

```php
if ($client->IsAllowed('user-123', 'post', '123', 'edit')) {
    // Do something
}
```

Please note that you have access to all the gRPC methods [declared here](https://github.com/eko/authz/blob/master/backend/api/proto/api.proto) in the proto file.

## Configuration

This SDK connects over gRPC to the backend service. Here are the available configuration options:

| Property | Description |
| -------- | ----------- |
| Address | Authz backend to connect to |
| ClientID | Your service account client id used to authenticate |
| ClientSecret | Your service account client secret key used to authenticate |
