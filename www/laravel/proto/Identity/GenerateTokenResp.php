<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity.proto

namespace Identity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>identity.GenerateTokenResp</code>
 */
class GenerateTokenResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string accessToken = 1;</code>
     */
    protected $accessToken = '';
    /**
     * Generated from protobuf field <code>int64 accessExpire = 2;</code>
     */
    protected $accessExpire = 0;
    /**
     * Generated from protobuf field <code>int64 refreshAfter = 3;</code>
     */
    protected $refreshAfter = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $accessToken
     *     @type int|string $accessExpire
     *     @type int|string $refreshAfter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Identity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string accessToken = 1;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Generated from protobuf field <code>string accessToken = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->accessToken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 accessExpire = 2;</code>
     * @return int|string
     */
    public function getAccessExpire()
    {
        return $this->accessExpire;
    }

    /**
     * Generated from protobuf field <code>int64 accessExpire = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAccessExpire($var)
    {
        GPBUtil::checkInt64($var);
        $this->accessExpire = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 refreshAfter = 3;</code>
     * @return int|string
     */
    public function getRefreshAfter()
    {
        return $this->refreshAfter;
    }

    /**
     * Generated from protobuf field <code>int64 refreshAfter = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRefreshAfter($var)
    {
        GPBUtil::checkInt64($var);
        $this->refreshAfter = $var;

        return $this;
    }

}
