<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ListUnspentRequest</code>
 */
class ListUnspentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 min_confs = 1;</code>
     */
    protected $min_confs = 0;
    /**
     * The maximum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 max_confs = 2;</code>
     */
    protected $max_confs = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_confs
     *           The minimum number of confirmations to be included.
     *     @type int $max_confs
     *           The maximum number of confirmations to be included.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 min_confs = 1;</code>
     * @return int
     */
    public function getMinConfs()
    {
        return $this->min_confs;
    }

    /**
     * The minimum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 min_confs = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinConfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_confs = $var;

        return $this;
    }

    /**
     * The maximum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 max_confs = 2;</code>
     * @return int
     */
    public function getMaxConfs()
    {
        return $this->max_confs;
    }

    /**
     * The maximum number of confirmations to be included.
     *
     * Generated from protobuf field <code>int32 max_confs = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_confs = $var;

        return $this;
    }

}

