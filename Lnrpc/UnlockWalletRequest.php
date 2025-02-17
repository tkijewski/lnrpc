<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletunlocker.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.UnlockWalletRequest</code>
 */
class UnlockWalletRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *wallet_password should be the current valid passphrase for the daemon. This
     *will be required to decrypt on-disk material that the daemon requires to
     *function properly. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     */
    protected $wallet_password = '';
    /**
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *individual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 2;</code>
     */
    protected $recovery_window = 0;
    /**
     *channel_backups is an optional argument that allows clients to recover the
     *settled funds within a set of channels. This should be populated if the
     *user was unable to close out all channels and sweep funds before partial or
     *total data loss occurred. If specified, then after on-chain recovery of
     *funds, lnd begin to carry out the data loss recovery protocol in order to
     *recover the funds in each channel from a remote force closed transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChanBackupSnapshot channel_backups = 3;</code>
     */
    protected $channel_backups = null;
    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its file system.
     *
     * Generated from protobuf field <code>bool stateless_init = 4;</code>
     */
    protected $stateless_init = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $wallet_password
     *          wallet_password should be the current valid passphrase for the daemon. This
     *          will be required to decrypt on-disk material that the daemon requires to
     *          function properly. When using REST, this field must be encoded as base64.
     *     @type int $recovery_window
     *          recovery_window is an optional argument specifying the address lookahead
     *          when restoring a wallet seed. The recovery window applies to each
     *          individual branch of the BIP44 derivation paths. Supplying a recovery
     *          window of zero indicates that no addresses should be recovered, such after
     *          the first initialization of the wallet.
     *     @type \Lnrpc\ChanBackupSnapshot $channel_backups
     *          channel_backups is an optional argument that allows clients to recover the
     *          settled funds within a set of channels. This should be populated if the
     *          user was unable to close out all channels and sweep funds before partial or
     *          total data loss occurred. If specified, then after on-chain recovery of
     *          funds, lnd begin to carry out the data loss recovery protocol in order to
     *          recover the funds in each channel from a remote force closed transaction.
     *     @type bool $stateless_init
     *          stateless_init is an optional argument instructing the daemon NOT to create
     *          any *.macaroon files in its file system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletunlocker::initOnce();
        parent::__construct($data);
    }

    /**
     *wallet_password should be the current valid passphrase for the daemon. This
     *will be required to decrypt on-disk material that the daemon requires to
     *function properly. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     * @return string
     */
    public function getWalletPassword()
    {
        return $this->wallet_password;
    }

    /**
     *wallet_password should be the current valid passphrase for the daemon. This
     *will be required to decrypt on-disk material that the daemon requires to
     *function properly. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setWalletPassword($var)
    {
        GPBUtil::checkString($var, False);
        $this->wallet_password = $var;

        return $this;
    }

    /**
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *individual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 2;</code>
     * @return int
     */
    public function getRecoveryWindow()
    {
        return $this->recovery_window;
    }

    /**
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *individual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRecoveryWindow($var)
    {
        GPBUtil::checkInt32($var);
        $this->recovery_window = $var;

        return $this;
    }

    /**
     *channel_backups is an optional argument that allows clients to recover the
     *settled funds within a set of channels. This should be populated if the
     *user was unable to close out all channels and sweep funds before partial or
     *total data loss occurred. If specified, then after on-chain recovery of
     *funds, lnd begin to carry out the data loss recovery protocol in order to
     *recover the funds in each channel from a remote force closed transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChanBackupSnapshot channel_backups = 3;</code>
     * @return \Lnrpc\ChanBackupSnapshot|null
     */
    public function getChannelBackups()
    {
        return $this->channel_backups;
    }

    public function hasChannelBackups()
    {
        return isset($this->channel_backups);
    }

    public function clearChannelBackups()
    {
        unset($this->channel_backups);
    }

    /**
     *channel_backups is an optional argument that allows clients to recover the
     *settled funds within a set of channels. This should be populated if the
     *user was unable to close out all channels and sweep funds before partial or
     *total data loss occurred. If specified, then after on-chain recovery of
     *funds, lnd begin to carry out the data loss recovery protocol in order to
     *recover the funds in each channel from a remote force closed transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChanBackupSnapshot channel_backups = 3;</code>
     * @param \Lnrpc\ChanBackupSnapshot $var
     * @return $this
     */
    public function setChannelBackups($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChanBackupSnapshot::class);
        $this->channel_backups = $var;

        return $this;
    }

    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its file system.
     *
     * Generated from protobuf field <code>bool stateless_init = 4;</code>
     * @return bool
     */
    public function getStatelessInit()
    {
        return $this->stateless_init;
    }

    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its file system.
     *
     * Generated from protobuf field <code>bool stateless_init = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatelessInit($var)
    {
        GPBUtil::checkBool($var);
        $this->stateless_init = $var;

        return $this;
    }

}

