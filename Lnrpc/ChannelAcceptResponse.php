<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelAcceptResponse</code>
 */
class ChannelAcceptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Whether or not the client accepts the channel.
     *
     * Generated from protobuf field <code>bool accept = 1;</code>
     */
    protected $accept = false;
    /**
     *&#47; The pending channel id to which this response applies.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 2;</code>
     */
    protected $pending_chan_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $accept
     *          &#47; Whether or not the client accepts the channel.
     *     @type string $pending_chan_id
     *          &#47; The pending channel id to which this response applies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; Whether or not the client accepts the channel.
     *
     * Generated from protobuf field <code>bool accept = 1;</code>
     * @return bool
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     *&#47; Whether or not the client accepts the channel.
     *
     * Generated from protobuf field <code>bool accept = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAccept($var)
    {
        GPBUtil::checkBool($var);
        $this->accept = $var;

        return $this;
    }

    /**
     *&#47; The pending channel id to which this response applies.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 2;</code>
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->pending_chan_id;
    }

    /**
     *&#47; The pending channel id to which this response applies.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPendingChanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->pending_chan_id = $var;

        return $this;
    }

}

