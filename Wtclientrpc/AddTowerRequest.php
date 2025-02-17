<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wtclient.proto

namespace Wtclientrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wtclientrpc.AddTowerRequest</code>
 */
class AddTowerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifying public key of the watchtower to add.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     */
    protected $pubkey = '';
    /**
     * A network address the watchtower is reachable over.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     */
    protected $address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pubkey
     *           The identifying public key of the watchtower to add.
     *     @type string $address
     *           A network address the watchtower is reachable over.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wtclient::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifying public key of the watchtower to add.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     * @return string
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * The identifying public key of the watchtower to add.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->pubkey = $var;

        return $this;
    }

    /**
     * A network address the watchtower is reachable over.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * A network address the watchtower is reachable over.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

}

