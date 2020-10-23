<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.MacaroonId</code>
 */
class MacaroonId extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes nonce = 1;</code>
     */
    protected $nonce = '';
    /**
     * Generated from protobuf field <code>bytes storageId = 2;</code>
     */
    protected $storageId = '';
    /**
     * Generated from protobuf field <code>repeated .lnrpc.Op ops = 3;</code>
     */
    private $ops;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nonce
     *     @type string $storageId
     *     @type \Lnrpc\Op[]|\Google\Protobuf\Internal\RepeatedField $ops
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes nonce = 1;</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>bytes nonce = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, False);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes storageId = 2;</code>
     * @return string
     */
    public function getStorageId()
    {
        return $this->storageId;
    }

    /**
     * Generated from protobuf field <code>bytes storageId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStorageId($var)
    {
        GPBUtil::checkString($var, False);
        $this->storageId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Op ops = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOps()
    {
        return $this->ops;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Op ops = 3;</code>
     * @param \Lnrpc\Op[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Op::class);
        $this->ops = $arr;

        return $this;
    }

}

