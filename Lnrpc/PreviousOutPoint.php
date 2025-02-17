<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PreviousOutPoint</code>
 */
class PreviousOutPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The outpoint in format txid:n.
     *
     * Generated from protobuf field <code>string outpoint = 1;</code>
     */
    protected $outpoint = '';
    /**
     * Denotes if the outpoint is controlled by the internal wallet.
     * The flag will only detect p2wkh, np2wkh and p2tr inputs as its own.
     *
     * Generated from protobuf field <code>bool is_our_output = 2;</code>
     */
    protected $is_our_output = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $outpoint
     *           The outpoint in format txid:n.
     *     @type bool $is_our_output
     *           Denotes if the outpoint is controlled by the internal wallet.
     *           The flag will only detect p2wkh, np2wkh and p2tr inputs as its own.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The outpoint in format txid:n.
     *
     * Generated from protobuf field <code>string outpoint = 1;</code>
     * @return string
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    /**
     * The outpoint in format txid:n.
     *
     * Generated from protobuf field <code>string outpoint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->outpoint = $var;

        return $this;
    }

    /**
     * Denotes if the outpoint is controlled by the internal wallet.
     * The flag will only detect p2wkh, np2wkh and p2tr inputs as its own.
     *
     * Generated from protobuf field <code>bool is_our_output = 2;</code>
     * @return bool
     */
    public function getIsOurOutput()
    {
        return $this->is_our_output;
    }

    /**
     * Denotes if the outpoint is controlled by the internal wallet.
     * The flag will only detect p2wkh, np2wkh and p2tr inputs as its own.
     *
     * Generated from protobuf field <code>bool is_our_output = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOurOutput($var)
    {
        GPBUtil::checkBool($var);
        $this->is_our_output = $var;

        return $this;
    }

}

