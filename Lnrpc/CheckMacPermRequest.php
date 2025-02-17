<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.CheckMacPermRequest</code>
 */
class CheckMacPermRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes macaroon = 1;</code>
     */
    protected $macaroon = '';
    /**
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 2;</code>
     */
    private $permissions;
    /**
     * Generated from protobuf field <code>string fullMethod = 3;</code>
     */
    protected $fullMethod = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $macaroon
     *     @type array<\Lnrpc\MacaroonPermission>|\Google\Protobuf\Internal\RepeatedField $permissions
     *     @type string $fullMethod
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes macaroon = 1;</code>
     * @return string
     */
    public function getMacaroon()
    {
        return $this->macaroon;
    }

    /**
     * Generated from protobuf field <code>bytes macaroon = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMacaroon($var)
    {
        GPBUtil::checkString($var, False);
        $this->macaroon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 2;</code>
     * @param array<\Lnrpc\MacaroonPermission>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\MacaroonPermission::class);
        $this->permissions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fullMethod = 3;</code>
     * @return string
     */
    public function getFullMethod()
    {
        return $this->fullMethod;
    }

    /**
     * Generated from protobuf field <code>string fullMethod = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFullMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->fullMethod = $var;

        return $this;
    }

}

