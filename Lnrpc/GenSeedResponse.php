<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletunlocker.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.GenSeedResponse</code>
 */
class GenSeedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This field is optional, as if not
     *provided, then the daemon will generate a new cipher seed for the user.
     *Otherwise, then the daemon will attempt to recover the wallet state linked
     *to this cipher seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 1;</code>
     */
    private $cipher_seed_mnemonic;
    /**
     *enciphered_seed are the raw aezeed cipher seed bytes. This is the raw
     *cipher text before run through our mnemonic encoding scheme.
     *
     * Generated from protobuf field <code>bytes enciphered_seed = 2;</code>
     */
    protected $enciphered_seed = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $cipher_seed_mnemonic
     *          cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *          cipher seed obtained by the user. This field is optional, as if not
     *          provided, then the daemon will generate a new cipher seed for the user.
     *          Otherwise, then the daemon will attempt to recover the wallet state linked
     *          to this cipher seed.
     *     @type string $enciphered_seed
     *          enciphered_seed are the raw aezeed cipher seed bytes. This is the raw
     *          cipher text before run through our mnemonic encoding scheme.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletunlocker::initOnce();
        parent::__construct($data);
    }

    /**
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This field is optional, as if not
     *provided, then the daemon will generate a new cipher seed for the user.
     *Otherwise, then the daemon will attempt to recover the wallet state linked
     *to this cipher seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCipherSeedMnemonic()
    {
        return $this->cipher_seed_mnemonic;
    }

    /**
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This field is optional, as if not
     *provided, then the daemon will generate a new cipher seed for the user.
     *Otherwise, then the daemon will attempt to recover the wallet state linked
     *to this cipher seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCipherSeedMnemonic($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cipher_seed_mnemonic = $arr;

        return $this;
    }

    /**
     *enciphered_seed are the raw aezeed cipher seed bytes. This is the raw
     *cipher text before run through our mnemonic encoding scheme.
     *
     * Generated from protobuf field <code>bytes enciphered_seed = 2;</code>
     * @return string
     */
    public function getEncipheredSeed()
    {
        return $this->enciphered_seed;
    }

    /**
     *enciphered_seed are the raw aezeed cipher seed bytes. This is the raw
     *cipher text before run through our mnemonic encoding scheme.
     *
     * Generated from protobuf field <code>bytes enciphered_seed = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEncipheredSeed($var)
    {
        GPBUtil::checkString($var, False);
        $this->enciphered_seed = $var;

        return $this;
    }

}

