<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ClosedChannelsRequest</code>
 */
class ClosedChannelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool cooperative = 1;</code>
     */
    protected $cooperative = false;
    /**
     * Generated from protobuf field <code>bool local_force = 2;</code>
     */
    protected $local_force = false;
    /**
     * Generated from protobuf field <code>bool remote_force = 3;</code>
     */
    protected $remote_force = false;
    /**
     * Generated from protobuf field <code>bool breach = 4;</code>
     */
    protected $breach = false;
    /**
     * Generated from protobuf field <code>bool funding_canceled = 5;</code>
     */
    protected $funding_canceled = false;
    /**
     * Generated from protobuf field <code>bool abandoned = 6;</code>
     */
    protected $abandoned = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $cooperative
     *     @type bool $local_force
     *     @type bool $remote_force
     *     @type bool $breach
     *     @type bool $funding_canceled
     *     @type bool $abandoned
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool cooperative = 1;</code>
     * @return bool
     */
    public function getCooperative()
    {
        return $this->cooperative;
    }

    /**
     * Generated from protobuf field <code>bool cooperative = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCooperative($var)
    {
        GPBUtil::checkBool($var);
        $this->cooperative = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool local_force = 2;</code>
     * @return bool
     */
    public function getLocalForce()
    {
        return $this->local_force;
    }

    /**
     * Generated from protobuf field <code>bool local_force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocalForce($var)
    {
        GPBUtil::checkBool($var);
        $this->local_force = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool remote_force = 3;</code>
     * @return bool
     */
    public function getRemoteForce()
    {
        return $this->remote_force;
    }

    /**
     * Generated from protobuf field <code>bool remote_force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemoteForce($var)
    {
        GPBUtil::checkBool($var);
        $this->remote_force = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool breach = 4;</code>
     * @return bool
     */
    public function getBreach()
    {
        return $this->breach;
    }

    /**
     * Generated from protobuf field <code>bool breach = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBreach($var)
    {
        GPBUtil::checkBool($var);
        $this->breach = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool funding_canceled = 5;</code>
     * @return bool
     */
    public function getFundingCanceled()
    {
        return $this->funding_canceled;
    }

    /**
     * Generated from protobuf field <code>bool funding_canceled = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setFundingCanceled($var)
    {
        GPBUtil::checkBool($var);
        $this->funding_canceled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool abandoned = 6;</code>
     * @return bool
     */
    public function getAbandoned()
    {
        return $this->abandoned;
    }

    /**
     * Generated from protobuf field <code>bool abandoned = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAbandoned($var)
    {
        GPBUtil::checkBool($var);
        $this->abandoned = $var;

        return $this;
    }

}

