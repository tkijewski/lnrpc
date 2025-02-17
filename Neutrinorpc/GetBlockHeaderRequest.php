<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: neutrino.proto

namespace Neutrinorpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>neutrinorpc.GetBlockHeaderRequest</code>
 */
class GetBlockHeaderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Block hash in hex notation.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           Block hash in hex notation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Neutrino::initOnce();
        parent::__construct($data);
    }

    /**
     * Block hash in hex notation.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Block hash in hex notation.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

}

