<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.FeatureBit</code>
 */
class FeatureBit
{
    /**
     * Generated from protobuf enum <code>DATALOSS_PROTECT_REQ = 0;</code>
     */
    const DATALOSS_PROTECT_REQ = 0;
    /**
     * Generated from protobuf enum <code>DATALOSS_PROTECT_OPT = 1;</code>
     */
    const DATALOSS_PROTECT_OPT = 1;
    /**
     * Generated from protobuf enum <code>INITIAL_ROUING_SYNC = 3;</code>
     */
    const INITIAL_ROUING_SYNC = 3;
    /**
     * Generated from protobuf enum <code>UPFRONT_SHUTDOWN_SCRIPT_REQ = 4;</code>
     */
    const UPFRONT_SHUTDOWN_SCRIPT_REQ = 4;
    /**
     * Generated from protobuf enum <code>UPFRONT_SHUTDOWN_SCRIPT_OPT = 5;</code>
     */
    const UPFRONT_SHUTDOWN_SCRIPT_OPT = 5;
    /**
     * Generated from protobuf enum <code>GOSSIP_QUERIES_REQ = 6;</code>
     */
    const GOSSIP_QUERIES_REQ = 6;
    /**
     * Generated from protobuf enum <code>GOSSIP_QUERIES_OPT = 7;</code>
     */
    const GOSSIP_QUERIES_OPT = 7;
    /**
     * Generated from protobuf enum <code>TLV_ONION_REQ = 8;</code>
     */
    const TLV_ONION_REQ = 8;
    /**
     * Generated from protobuf enum <code>TLV_ONION_OPT = 9;</code>
     */
    const TLV_ONION_OPT = 9;
    /**
     * Generated from protobuf enum <code>EXT_GOSSIP_QUERIES_REQ = 10;</code>
     */
    const EXT_GOSSIP_QUERIES_REQ = 10;
    /**
     * Generated from protobuf enum <code>EXT_GOSSIP_QUERIES_OPT = 11;</code>
     */
    const EXT_GOSSIP_QUERIES_OPT = 11;
    /**
     * Generated from protobuf enum <code>STATIC_REMOTE_KEY_REQ = 12;</code>
     */
    const STATIC_REMOTE_KEY_REQ = 12;
    /**
     * Generated from protobuf enum <code>STATIC_REMOTE_KEY_OPT = 13;</code>
     */
    const STATIC_REMOTE_KEY_OPT = 13;
    /**
     * Generated from protobuf enum <code>PAYMENT_ADDR_REQ = 14;</code>
     */
    const PAYMENT_ADDR_REQ = 14;
    /**
     * Generated from protobuf enum <code>PAYMENT_ADDR_OPT = 15;</code>
     */
    const PAYMENT_ADDR_OPT = 15;
    /**
     * Generated from protobuf enum <code>MPP_REQ = 16;</code>
     */
    const MPP_REQ = 16;
    /**
     * Generated from protobuf enum <code>MPP_OPT = 17;</code>
     */
    const MPP_OPT = 17;

    private static $valueToName = [
        self::DATALOSS_PROTECT_REQ => 'DATALOSS_PROTECT_REQ',
        self::DATALOSS_PROTECT_OPT => 'DATALOSS_PROTECT_OPT',
        self::INITIAL_ROUING_SYNC => 'INITIAL_ROUING_SYNC',
        self::UPFRONT_SHUTDOWN_SCRIPT_REQ => 'UPFRONT_SHUTDOWN_SCRIPT_REQ',
        self::UPFRONT_SHUTDOWN_SCRIPT_OPT => 'UPFRONT_SHUTDOWN_SCRIPT_OPT',
        self::GOSSIP_QUERIES_REQ => 'GOSSIP_QUERIES_REQ',
        self::GOSSIP_QUERIES_OPT => 'GOSSIP_QUERIES_OPT',
        self::TLV_ONION_REQ => 'TLV_ONION_REQ',
        self::TLV_ONION_OPT => 'TLV_ONION_OPT',
        self::EXT_GOSSIP_QUERIES_REQ => 'EXT_GOSSIP_QUERIES_REQ',
        self::EXT_GOSSIP_QUERIES_OPT => 'EXT_GOSSIP_QUERIES_OPT',
        self::STATIC_REMOTE_KEY_REQ => 'STATIC_REMOTE_KEY_REQ',
        self::STATIC_REMOTE_KEY_OPT => 'STATIC_REMOTE_KEY_OPT',
        self::PAYMENT_ADDR_REQ => 'PAYMENT_ADDR_REQ',
        self::PAYMENT_ADDR_OPT => 'PAYMENT_ADDR_OPT',
        self::MPP_REQ => 'MPP_REQ',
        self::MPP_OPT => 'MPP_OPT',
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

