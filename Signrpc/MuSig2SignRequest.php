<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.MuSig2SignRequest</code>
 */
class MuSig2SignRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The unique ID of the signing session to use for signing.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     */
    protected $session_id = '';
    /**
     *The 32-byte SHA256 digest of the message to sign.
     *
     * Generated from protobuf field <code>bytes message_digest = 2;</code>
     */
    protected $message_digest = '';
    /**
     *Cleanup indicates that after signing, the session state can be cleaned up,
     *since another participant is going to be responsible for combining the
     *partial signatures.
     *
     * Generated from protobuf field <code>bool cleanup = 3;</code>
     */
    protected $cleanup = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *          The unique ID of the signing session to use for signing.
     *     @type string $message_digest
     *          The 32-byte SHA256 digest of the message to sign.
     *     @type bool $cleanup
     *          Cleanup indicates that after signing, the session state can be cleaned up,
     *          since another participant is going to be responsible for combining the
     *          partial signatures.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *The unique ID of the signing session to use for signing.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     *The unique ID of the signing session to use for signing.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, False);
        $this->session_id = $var;

        return $this;
    }

    /**
     *The 32-byte SHA256 digest of the message to sign.
     *
     * Generated from protobuf field <code>bytes message_digest = 2;</code>
     * @return string
     */
    public function getMessageDigest()
    {
        return $this->message_digest;
    }

    /**
     *The 32-byte SHA256 digest of the message to sign.
     *
     * Generated from protobuf field <code>bytes message_digest = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageDigest($var)
    {
        GPBUtil::checkString($var, False);
        $this->message_digest = $var;

        return $this;
    }

    /**
     *Cleanup indicates that after signing, the session state can be cleaned up,
     *since another participant is going to be responsible for combining the
     *partial signatures.
     *
     * Generated from protobuf field <code>bool cleanup = 3;</code>
     * @return bool
     */
    public function getCleanup()
    {
        return $this->cleanup;
    }

    /**
     *Cleanup indicates that after signing, the session state can be cleaned up,
     *since another participant is going to be responsible for combining the
     *partial signatures.
     *
     * Generated from protobuf field <code>bool cleanup = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCleanup($var)
    {
        GPBUtil::checkBool($var);
        $this->cleanup = $var;

        return $this;
    }

}

