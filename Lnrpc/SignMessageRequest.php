<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SignMessageRequest</code>
 */
class SignMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $msg
     *          *
     *          The message to be signed. When using REST, this field must be encoded as
     *          base64.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     **
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, False);
        $this->msg = $var;

        return $this;
    }

}

