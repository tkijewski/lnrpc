<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.TxOut</code>
 */
class TxOut extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of the output being spent.
     *
     * Generated from protobuf field <code>int64 value = 1;</code>
     */
    private $value = 0;
    /**
     * The script of the output being spent.
     *
     * Generated from protobuf field <code>bytes pk_script = 2;</code>
     */
    private $pk_script = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     *           The value of the output being spent.
     *     @type string $pk_script
     *           The script of the output being spent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the output being spent.
     *
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the output being spent.
     *
     * Generated from protobuf field <code>int64 value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     * The script of the output being spent.
     *
     * Generated from protobuf field <code>bytes pk_script = 2;</code>
     * @return string
     */
    public function getPkScript()
    {
        return $this->pk_script;
    }

    /**
     * The script of the output being spent.
     *
     * Generated from protobuf field <code>bytes pk_script = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPkScript($var)
    {
        GPBUtil::checkString($var, False);
        $this->pk_script = $var;

        return $this;
    }

}

