<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Authz;

/**
 */
class ApiClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Authz\AuthenticateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Authenticate(\Authz\AuthenticateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/Authenticate',
        $argument,
        ['\Authz\AuthenticateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\CheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Check(\Authz\CheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/Check',
        $argument,
        ['\Authz\CheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PolicyCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PolicyCreate(\Authz\PolicyCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PolicyCreate',
        $argument,
        ['\Authz\PolicyCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PolicyGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PolicyGet(\Authz\PolicyGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PolicyGet',
        $argument,
        ['\Authz\PolicyGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PolicyDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PolicyDelete(\Authz\PolicyDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PolicyDelete',
        $argument,
        ['\Authz\PolicyDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PolicyUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PolicyUpdate(\Authz\PolicyUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PolicyUpdate',
        $argument,
        ['\Authz\PolicyUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PrincipalCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PrincipalCreate(\Authz\PrincipalCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PrincipalCreate',
        $argument,
        ['\Authz\PrincipalCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PrincipalGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PrincipalGet(\Authz\PrincipalGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PrincipalGet',
        $argument,
        ['\Authz\PrincipalGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PrincipalDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PrincipalDelete(\Authz\PrincipalDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PrincipalDelete',
        $argument,
        ['\Authz\PrincipalDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\PrincipalUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PrincipalUpdate(\Authz\PrincipalUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/PrincipalUpdate',
        $argument,
        ['\Authz\PrincipalUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\ResourceCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResourceCreate(\Authz\ResourceCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/ResourceCreate',
        $argument,
        ['\Authz\ResourceCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\ResourceGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResourceGet(\Authz\ResourceGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/ResourceGet',
        $argument,
        ['\Authz\ResourceGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\ResourceDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResourceDelete(\Authz\ResourceDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/ResourceDelete',
        $argument,
        ['\Authz\ResourceDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\ResourceUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResourceUpdate(\Authz\ResourceUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/ResourceUpdate',
        $argument,
        ['\Authz\ResourceUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\RoleCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RoleCreate(\Authz\RoleCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/RoleCreate',
        $argument,
        ['\Authz\RoleCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\RoleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RoleGet(\Authz\RoleGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/RoleGet',
        $argument,
        ['\Authz\RoleGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\RoleDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RoleDelete(\Authz\RoleDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/RoleDelete',
        $argument,
        ['\Authz\RoleDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authz\RoleUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RoleUpdate(\Authz\RoleUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authz.Api/RoleUpdate',
        $argument,
        ['\Authz\RoleUpdateResponse', 'decode'],
        $metadata, $options);
    }

}
