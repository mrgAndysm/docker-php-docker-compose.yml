<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity.proto

namespace Identity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>identity.ValidateTokenReq</code>
 */
class ValidateTokenReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 userId = 1;</code>
     */
    protected $userId = 0;
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $userId
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Identity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 userId = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>int64 userId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}
