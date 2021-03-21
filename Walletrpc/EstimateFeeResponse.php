<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.EstimateFeeResponse</code>
 */
class EstimateFeeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *The amount of satoshis per kw that should be used in order to reach the
     *confirmation target in the request.
     *
     * Generated from protobuf field <code>int64 sat_per_kw = 1;</code>
     */
    private $sat_per_kw = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sat_per_kw
     *          The amount of satoshis per kw that should be used in order to reach the
     *          confirmation target in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The amount of satoshis per kw that should be used in order to reach the
     *confirmation target in the request.
     *
     * Generated from protobuf field <code>int64 sat_per_kw = 1;</code>
     * @return int|string
     */
    public function getSatPerKw()
    {
        return $this->sat_per_kw;
    }

    /**
     *The amount of satoshis per kw that should be used in order to reach the
     *confirmation target in the request.
     *
     * Generated from protobuf field <code>int64 sat_per_kw = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerKw($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_per_kw = $var;

        return $this;
    }

}

