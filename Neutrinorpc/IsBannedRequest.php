<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: neutrino.proto

namespace Neutrinorpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>neutrinorpc.IsBannedRequest</code>
 */
class IsBannedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Peer to lookup.
     *
     * Generated from protobuf field <code>string peer_addrs = 1;</code>
     */
    protected $peer_addrs = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $peer_addrs
     *           Peer to lookup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Neutrino::initOnce();
        parent::__construct($data);
    }

    /**
     * Peer to lookup.
     *
     * Generated from protobuf field <code>string peer_addrs = 1;</code>
     * @return string
     */
    public function getPeerAddrs()
    {
        return $this->peer_addrs;
    }

    /**
     * Peer to lookup.
     *
     * Generated from protobuf field <code>string peer_addrs = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerAddrs($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_addrs = $var;

        return $this;
    }

}

