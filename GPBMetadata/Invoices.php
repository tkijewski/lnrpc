<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: invoices.proto

namespace GPBMetadata;

class Invoices
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Lightning::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
invoices.protoinvoicesrpc"(
CancelInvoiceMsg
payment_hash ("
CancelInvoiceResp"�
AddHoldInvoiceRequest
memo (	
hash (
value (

value_msat
 (
description_hash (
expiry (
fallback_addr (	
cltv_expiry (%
route_hints (2.lnrpc.RouteHint
private	 ("V
AddHoldInvoiceResp
payment_request (	
	add_index (
payment_addr ("$
SettleInvoiceMsg
preimage ("
SettleInvoiceResp"5
SubscribeSingleInvoiceRequest
r_hash (J"�
LookupInvoiceMsg
payment_hash (H 
payment_addr (H 
set_id (H 4
lookup_modifier (2.invoicesrpc.LookupModifierB
invoice_ref*D
LookupModifier
DEFAULT 
HTLC_SET_ONLY
HTLC_SET_BLANK2�
InvoicesV
SubscribeSingleInvoice*.invoicesrpc.SubscribeSingleInvoiceRequest.lnrpc.Invoice0N
CancelInvoice.invoicesrpc.CancelInvoiceMsg.invoicesrpc.CancelInvoiceRespU
AddHoldInvoice".invoicesrpc.AddHoldInvoiceRequest.invoicesrpc.AddHoldInvoiceRespN
SettleInvoice.invoicesrpc.SettleInvoiceMsg.invoicesrpc.SettleInvoiceResp@
LookupInvoiceV2.invoicesrpc.LookupInvoiceMsg.lnrpc.InvoiceB3Z1github.com/lightningnetwork/lnd/lnrpc/invoicesrpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

