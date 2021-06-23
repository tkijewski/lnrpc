<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.KeyLocator</code>
 */
class KeyLocator extends \Google\Protobuf\Internal\Message
{
    /**
     * The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     */
    private $key_family = 0;
    /**
     * The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     */
    private $key_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key_family
     *           The family of key being identified.
     *     @type int $key_index
     *           The precise index of the key being identified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     * The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     * @return int
     */
    public function getKeyFamily()
    {
        return $this->key_family;
    }

    /**
     * The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyFamily($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_family = $var;

        return $this;
    }

    /**
     * The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     * @return int
     */
    public function getKeyIndex()
    {
        return $this->key_index;
    }

    /**
     * The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_index = $var;

        return $this;
    }

}

