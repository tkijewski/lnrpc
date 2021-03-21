<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *ForwardHtlcInterceptResponse enables the caller to resolve a previously hold
 *forward. The caller can choose either to:
 *- `Resume`: Execute the default behavior (usually forward).
 *- `Reject`: Fail the htlc backwards.
 *- `Settle`: Settle this htlc with a given preimage.
 *
 * Generated from protobuf message <code>routerrpc.ForwardHtlcInterceptResponse</code>
 */
class ForwardHtlcInterceptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The key of this forwarded htlc. It defines the incoming channel id and
     *the index in this channel.
     *
     * Generated from protobuf field <code>.routerrpc.CircuitKey incoming_circuit_key = 1;</code>
     */
    private $incoming_circuit_key = null;
    /**
     * The resolve action for this intercepted htlc.
     *
     * Generated from protobuf field <code>.routerrpc.ResolveHoldForwardAction action = 2;</code>
     */
    private $action = 0;
    /**
     * The preimage in case the resolve action is Settle.
     *
     * Generated from protobuf field <code>bytes preimage = 3;</code>
     */
    private $preimage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Routerrpc\CircuitKey $incoming_circuit_key
     *          *
     *          The key of this forwarded htlc. It defines the incoming channel id and
     *          the index in this channel.
     *     @type int $action
     *           The resolve action for this intercepted htlc.
     *     @type string $preimage
     *           The preimage in case the resolve action is Settle.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The key of this forwarded htlc. It defines the incoming channel id and
     *the index in this channel.
     *
     * Generated from protobuf field <code>.routerrpc.CircuitKey incoming_circuit_key = 1;</code>
     * @return \Routerrpc\CircuitKey
     */
    public function getIncomingCircuitKey()
    {
        return $this->incoming_circuit_key;
    }

    /**
     **
     *The key of this forwarded htlc. It defines the incoming channel id and
     *the index in this channel.
     *
     * Generated from protobuf field <code>.routerrpc.CircuitKey incoming_circuit_key = 1;</code>
     * @param \Routerrpc\CircuitKey $var
     * @return $this
     */
    public function setIncomingCircuitKey($var)
    {
        GPBUtil::checkMessage($var, \Routerrpc\CircuitKey::class);
        $this->incoming_circuit_key = $var;

        return $this;
    }

    /**
     * The resolve action for this intercepted htlc.
     *
     * Generated from protobuf field <code>.routerrpc.ResolveHoldForwardAction action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The resolve action for this intercepted htlc.
     *
     * Generated from protobuf field <code>.routerrpc.ResolveHoldForwardAction action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Routerrpc\ResolveHoldForwardAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * The preimage in case the resolve action is Settle.
     *
     * Generated from protobuf field <code>bytes preimage = 3;</code>
     * @return string
     */
    public function getPreimage()
    {
        return $this->preimage;
    }

    /**
     * The preimage in case the resolve action is Settle.
     *
     * Generated from protobuf field <code>bytes preimage = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->preimage = $var;

        return $this;
    }

}

