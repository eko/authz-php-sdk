<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Authz;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authz.CheckRequest</code>
 */
class CheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authz.Check checks = 1;</code>
     */
    private $checks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Authz\Check>|\Google\Protobuf\Internal\RepeatedField $checks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authz.Check checks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChecks()
    {
        return $this->checks;
    }

    /**
     * Generated from protobuf field <code>repeated .authz.Check checks = 1;</code>
     * @param array<\Authz\Check>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChecks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authz\Check::class);
        $this->checks = $arr;

        return $this;
    }

}

