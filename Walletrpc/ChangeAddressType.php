<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use UnexpectedValueException;

/**
 * The possible change address types for default accounts and single imported
 * public keys. By default, P2WPKH will be used. We don't provide the
 * possibility to choose P2PKH as it is a legacy key scope, nor NP2WPKH as
 * no key scope permits to do so. For custom accounts, no change type should
 * be provided as the coin selection key scope will always be used to generate
 * the change address.
 *
 * Protobuf type <code>walletrpc.ChangeAddressType</code>
 */
class ChangeAddressType
{
    /**
     * CHANGE_ADDRESS_TYPE_UNSPECIFIED indicates that no change address type is
     * provided. We will then use P2WPKH address type for change (BIP0084 key
     * scope).
     *
     * Generated from protobuf enum <code>CHANGE_ADDRESS_TYPE_UNSPECIFIED = 0;</code>
     */
    const CHANGE_ADDRESS_TYPE_UNSPECIFIED = 0;
    /**
     * CHANGE_ADDRESS_TYPE_P2TR indicates to use P2TR address for change output
     * (BIP0086 key scope).
     *
     * Generated from protobuf enum <code>CHANGE_ADDRESS_TYPE_P2TR = 1;</code>
     */
    const CHANGE_ADDRESS_TYPE_P2TR = 1;

    private static $valueToName = [
        self::CHANGE_ADDRESS_TYPE_UNSPECIFIED => 'CHANGE_ADDRESS_TYPE_UNSPECIFIED',
        self::CHANGE_ADDRESS_TYPE_P2TR => 'CHANGE_ADDRESS_TYPE_P2TR',
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

