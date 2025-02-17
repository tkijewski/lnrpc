<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.OutputScriptType</code>
 */
class OutputScriptType
{
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_PUBKEY_HASH = 0;</code>
     */
    const SCRIPT_TYPE_PUBKEY_HASH = 0;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_SCRIPT_HASH = 1;</code>
     */
    const SCRIPT_TYPE_SCRIPT_HASH = 1;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_WITNESS_V0_PUBKEY_HASH = 2;</code>
     */
    const SCRIPT_TYPE_WITNESS_V0_PUBKEY_HASH = 2;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_WITNESS_V0_SCRIPT_HASH = 3;</code>
     */
    const SCRIPT_TYPE_WITNESS_V0_SCRIPT_HASH = 3;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_PUBKEY = 4;</code>
     */
    const SCRIPT_TYPE_PUBKEY = 4;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_MULTISIG = 5;</code>
     */
    const SCRIPT_TYPE_MULTISIG = 5;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_NULLDATA = 6;</code>
     */
    const SCRIPT_TYPE_NULLDATA = 6;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_NON_STANDARD = 7;</code>
     */
    const SCRIPT_TYPE_NON_STANDARD = 7;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_WITNESS_UNKNOWN = 8;</code>
     */
    const SCRIPT_TYPE_WITNESS_UNKNOWN = 8;
    /**
     * Generated from protobuf enum <code>SCRIPT_TYPE_WITNESS_V1_TAPROOT = 9;</code>
     */
    const SCRIPT_TYPE_WITNESS_V1_TAPROOT = 9;

    private static $valueToName = [
        self::SCRIPT_TYPE_PUBKEY_HASH => 'SCRIPT_TYPE_PUBKEY_HASH',
        self::SCRIPT_TYPE_SCRIPT_HASH => 'SCRIPT_TYPE_SCRIPT_HASH',
        self::SCRIPT_TYPE_WITNESS_V0_PUBKEY_HASH => 'SCRIPT_TYPE_WITNESS_V0_PUBKEY_HASH',
        self::SCRIPT_TYPE_WITNESS_V0_SCRIPT_HASH => 'SCRIPT_TYPE_WITNESS_V0_SCRIPT_HASH',
        self::SCRIPT_TYPE_PUBKEY => 'SCRIPT_TYPE_PUBKEY',
        self::SCRIPT_TYPE_MULTISIG => 'SCRIPT_TYPE_MULTISIG',
        self::SCRIPT_TYPE_NULLDATA => 'SCRIPT_TYPE_NULLDATA',
        self::SCRIPT_TYPE_NON_STANDARD => 'SCRIPT_TYPE_NON_STANDARD',
        self::SCRIPT_TYPE_WITNESS_UNKNOWN => 'SCRIPT_TYPE_WITNESS_UNKNOWN',
        self::SCRIPT_TYPE_WITNESS_V1_TAPROOT => 'SCRIPT_TYPE_WITNESS_V1_TAPROOT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

