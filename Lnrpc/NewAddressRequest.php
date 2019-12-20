<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NewAddressRequest</code>
 */
class NewAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The address type
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *          &#47; The address type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The address type
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *&#47; The address type
     *
     * Generated from protobuf field <code>.lnrpc.AddressType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\AddressType::class);
        $this->type = $var;

        return $this;
    }

}

