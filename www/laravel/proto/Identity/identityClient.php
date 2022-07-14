<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Identity;

/**
 */
class identityClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 生成token，只针对用户服务开放访问
     * @param \Identity\GenerateTokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Identity\GenerateTokenResp
     */
    public function generateToken(\Identity\GenerateTokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.identity/generateToken',
        $argument,
        ['\Identity\GenerateTokenResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 清除token，只针对用户服务开放访问
     * @param \Identity\ClearTokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Identity\ClearTokenResp
     */
    public function clearToken(\Identity\ClearTokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.identity/clearToken',
        $argument,
        ['\Identity\ClearTokenResp', 'decode'],
        $metadata, $options);
    }

    /**
     * validateToken ，只很对用户服务、授权服务api开放
     * @param \Identity\ValidateTokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Identity\ValidateTokenResp
     */
    public function validateToken(\Identity\ValidateTokenReq $argument,
      $metadata = [], $options = []) {
        
        return $this->_simpleRequest('/identity.identity/validateToken',
        $argument,
        ['\Identity\ValidateTokenResp', 'decode'],
        $metadata, $options);
    }

}
