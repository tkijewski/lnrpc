<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.BuildRouteRequest</code>
 */
class BuildRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The amount to send expressed in msat. If set to zero, the minimum routable
     *amount is used.
     *
     * Generated from protobuf field <code>int64 amt_msat = 1;</code>
     */
    protected $amt_msat = 0;
    /**
     *CLTV delta from the current height that should be used for the timelock
     *of the final hop
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 2;</code>
     */
    protected $final_cltv_delta = 0;
    /**
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 3 [jstype = JS_STRING];</code>
     */
    protected $outgoing_chan_id = 0;
    /**
     *A list of hops that defines the route. This does not include the source hop
     *pubkey.
     *
     * Generated from protobuf field <code>repeated bytes hop_pubkeys = 4;</code>
     */
    private $hop_pubkeys;
    /**
     * An optional payment addr to be included within the last hop of the route.
     *
     * Generated from protobuf field <code>bytes payment_addr = 5;</code>
     */
    protected $payment_addr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $amt_msat
     *          The amount to send expressed in msat. If set to zero, the minimum routable
     *          amount is used.
     *     @type int $final_cltv_delta
     *          CLTV delta from the current height that should be used for the timelock
     *          of the final hop
     *     @type int|string $outgoing_chan_id
     *          The channel id of the channel that must be taken to the first hop. If zero,
     *          any channel may be used.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $hop_pubkeys
     *          A list of hops that defines the route. This does not include the source hop
     *          pubkey.
     *     @type string $payment_addr
     *           An optional payment addr to be included within the last hop of the route.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *The amount to send expressed in msat. If set to zero, the minimum routable
     *amount is used.
     *
     * Generated from protobuf field <code>int64 amt_msat = 1;</code>
     * @return int|string
     */
    public function getAmtMsat()
    {
        return $this->amt_msat;
    }

    /**
     *The amount to send expressed in msat. If set to zero, the minimum routable
     *amount is used.
     *
     * Generated from protobuf field <code>int64 amt_msat = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_msat = $var;

        return $this;
    }

    /**
     *CLTV delta from the current height that should be used for the timelock
     *of the final hop
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 2;</code>
     * @return int
     */
    public function getFinalCltvDelta()
    {
        return $this->final_cltv_delta;
    }

    /**
     *CLTV delta from the current height that should be used for the timelock
     *of the final hop
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFinalCltvDelta($var)
    {
        GPBUtil::checkInt32($var);
        $this->final_cltv_delta = $var;

        return $this;
    }

    /**
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getOutgoingChanId()
    {
        return $this->outgoing_chan_id;
    }

    /**
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 3 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOutgoingChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->outgoing_chan_id = $var;

        return $this;
    }

    /**
     *A list of hops that defines the route. This does not include the source hop
     *pubkey.
     *
     * Generated from protobuf field <code>repeated bytes hop_pubkeys = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHopPubkeys()
    {
        return $this->hop_pubkeys;
    }

    /**
     *A list of hops that defines the route. This does not include the source hop
     *pubkey.
     *
     * Generated from protobuf field <code>repeated bytes hop_pubkeys = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHopPubkeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->hop_pubkeys = $arr;

        return $this;
    }

    /**
     * An optional payment addr to be included within the last hop of the route.
     *
     * Generated from protobuf field <code>bytes payment_addr = 5;</code>
     * @return string
     */
    public function getPaymentAddr()
    {
        return $this->payment_addr;
    }

    /**
     * An optional payment addr to be included within the last hop of the route.
     *
     * Generated from protobuf field <code>bytes payment_addr = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_addr = $var;

        return $this;
    }

}

