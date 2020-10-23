<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingHTLC</code>
 */
class PendingHTLC extends \Google\Protobuf\Internal\Message
{
    /**
     * The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1;</code>
     */
    protected $incoming = false;
    /**
     * The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3;</code>
     */
    protected $outpoint = '';
    /**
     * The next block height at which we can spend the current stage
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4;</code>
     */
    protected $maturity_height = 0;
    /**
     *The number of blocks remaining until the current stage can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5;</code>
     */
    protected $blocks_til_maturity = 0;
    /**
     * Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6;</code>
     */
    protected $stage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $incoming
     *           The direction within the channel that the htlc was sent
     *     @type int|string $amount
     *           The total value of the htlc
     *     @type string $outpoint
     *           The final output to be swept back to the user's wallet
     *     @type int $maturity_height
     *           The next block height at which we can spend the current stage
     *     @type int $blocks_til_maturity
     *          The number of blocks remaining until the current stage can be swept.
     *          Negative values indicate how many blocks have passed since becoming
     *          mature.
     *     @type int $stage
     *           Indicates whether the htlc is in its first or second stage of recovery
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1;</code>
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncoming($var)
    {
        GPBUtil::checkBool($var);
        $this->incoming = $var;

        return $this;
    }

    /**
     * The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3;</code>
     * @return string
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    /**
     * The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3;</code>
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
     * The next block height at which we can spend the current stage
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4;</code>
     * @return int
     */
    public function getMaturityHeight()
    {
        return $this->maturity_height;
    }

    /**
     * The next block height at which we can spend the current stage
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaturityHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->maturity_height = $var;

        return $this;
    }

    /**
     *The number of blocks remaining until the current stage can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5;</code>
     * @return int
     */
    public function getBlocksTilMaturity()
    {
        return $this->blocks_til_maturity;
    }

    /**
     *The number of blocks remaining until the current stage can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBlocksTilMaturity($var)
    {
        GPBUtil::checkInt32($var);
        $this->blocks_til_maturity = $var;

        return $this;
    }

    /**
     * Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6;</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage = $var;

        return $this;
    }

}

