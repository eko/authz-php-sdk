<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Authz;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authz.RoleGetResponse</code>
 */
class RoleGetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authz.Role role = 1;</code>
     */
    protected $role = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authz\Role $role
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authz.Role role = 1;</code>
     * @return \Authz\Role|null
     */
    public function getRole()
    {
        return $this->role;
    }

    public function hasRole()
    {
        return isset($this->role);
    }

    public function clearRole()
    {
        unset($this->role);
    }

    /**
     * Generated from protobuf field <code>.authz.Role role = 1;</code>
     * @param \Authz\Role $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkMessage($var, \Authz\Role::class);
        $this->role = $var;

        return $this;
    }

}

