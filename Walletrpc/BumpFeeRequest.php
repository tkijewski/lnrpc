<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.BumpFeeRequest</code>
 */
class BumpFeeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     */
    protected $outpoint = null;
    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     */
    protected $target_conf = 0;
    /**
     *Deprecated, use sat_per_vbyte.
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $sat_per_byte = 0;
    /**
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     */
    protected $force = false;
    /**
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 5;</code>
     */
    protected $sat_per_vbyte = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\OutPoint $outpoint
     *           The input we're attempting to bump the fee of.
     *     @type int $target_conf
     *           The target number of blocks that the input should be spent within.
     *     @type int $sat_per_byte
     *          Deprecated, use sat_per_vbyte.
     *          The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *          with.
     *     @type bool $force
     *          Whether this input must be force-swept. This means that it is swept even
     *          if it has a negative yield.
     *     @type int|string $sat_per_vbyte
     *          The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *          with.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     * @return \Lnrpc\OutPoint|null
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    public function hasOutpoint()
    {
        return isset($this->outpoint);
    }

    public function clearOutpoint()
    {
        unset($this->outpoint);
    }

    /**
     * The input we're attempting to bump the fee of.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 1;</code>
     * @param \Lnrpc\OutPoint $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\OutPoint::class);
        $this->outpoint = $var;

        return $this;
    }

    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that the input should be spent within.
     *
     * Generated from protobuf field <code>uint32 target_conf = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkUint32($var);
        $this->target_conf = $var;

        return $this;
    }

    /**
     *Deprecated, use sat_per_vbyte.
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getSatPerByte()
    {
        @trigger_error('sat_per_byte is deprecated.', E_USER_DEPRECATED);
        return $this->sat_per_byte;
    }

    /**
     *Deprecated, use sat_per_vbyte.
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint32 sat_per_byte = 3 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setSatPerByte($var)
    {
        @trigger_error('sat_per_byte is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkUint32($var);
        $this->sat_per_byte = $var;

        return $this;
    }

    /**
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     *Whether this input must be force-swept. This means that it is swept even
     *if it has a negative yield.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

    /**
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 5;</code>
     * @return int|string
     */
    public function getSatPerVbyte()
    {
        return $this->sat_per_vbyte;
    }

    /**
     *The fee rate, expressed in sat/vbyte, that should be used to spend the input
     *with.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerVbyte($var)
    {
        GPBUtil::checkUint64($var);
        $this->sat_per_vbyte = $var;

        return $this;
    }

}

