<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Authz;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authz.ResourceCreateResponse</code>
 */
class ResourceCreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authz.Resource resource = 1;</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authz\Resource $resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authz.Resource resource = 1;</code>
     * @return \Authz\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Generated from protobuf field <code>.authz.Resource resource = 1;</code>
     * @param \Authz\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Authz\Resource::class);
        $this->resource = $var;

        return $this;
    }

}

