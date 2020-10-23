<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.CircuitKey</code>
 */
class CircuitKey extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The id of the channel that the is part of this circuit.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     */
    protected $chan_id = 0;
    /**
     *&#47; The index of the incoming htlc in the incoming channel.
     *
     * Generated from protobuf field <code>uint64 htlc_id = 2;</code>
     */
    protected $htlc_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $chan_id
     *          &#47; The id of the channel that the is part of this circuit.
     *     @type int|string $htlc_id
     *          &#47; The index of the incoming htlc in the incoming channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The id of the channel that the is part of this circuit.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     *&#47; The id of the channel that the is part of this circuit.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     *&#47; The index of the incoming htlc in the incoming channel.
     *
     * Generated from protobuf field <code>uint64 htlc_id = 2;</code>
     * @return int|string
     */
    public function getHtlcId()
    {
        return $this->htlc_id;
    }

    /**
     *&#47; The index of the incoming htlc in the incoming channel.
     *
     * Generated from protobuf field <code>uint64 htlc_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHtlcId($var)
    {
        GPBUtil::checkUint64($var);
        $this->htlc_id = $var;

        return $this;
    }

}

