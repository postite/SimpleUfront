<?php

// Generated by Haxe 3.3.0
class ufront_remoting_HttpConnection extends haxe_remoting_HttpConnection {
	public function __construct($url, $path) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct($url,$path);
		$GLOBALS['%s']->pop();
	}}
	public function call($params) {
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call");
		$__hx__spos = $GLOBALS['%s']->length;
		$h = new ufront_remoting_HttpWithUploads($this->__url, false, ufront_remoting_HttpConnection::$TIMEOUT);
		$status = null;
		$s = new ufront_remoting_RemotingSerializer(ufront_remoting_RemotingDirection::$RDClientToServer);
		$s->serialize($this->__path);
		$s->serialize($params);
		$tmp = $this->__path->join(".");
		$tmp1 = _hx_string_or_null($tmp) . "(";
		$tmp2 = $params->join(",");
		$remotingCallString = _hx_string_or_null($tmp1) . _hx_string_or_null($tmp2) . ")";
		$responseCode = null;
		$responseText = null;
		$result = null;
		$throwError = array(new _hx_lambda(array(), "ufront_remoting_HttpConnection_0"), 'execute');
		$setResult = array(new _hx_lambda(array(&$result), "ufront_remoting_HttpConnection_1"), 'execute');
		$onStatus = array(new _hx_lambda(array(&$responseCode, &$status), "ufront_remoting_HttpConnection_2"), 'execute');
		$onData = array(new _hx_lambda(array(&$remotingCallString, &$responseText, &$setResult, &$throwError), "ufront_remoting_HttpConnection_3"), 'execute');
		$onError = array(new _hx_lambda(array(&$h, &$remotingCallString, &$responseCode, &$setResult, &$throwError), "ufront_remoting_HttpConnection_4"), 'execute');
		$h->handle($onStatus, $onData, $onError);
		$h->setHeader("X-Haxe-Remoting", "1");
		$h->setHeader("X-Ufront-Remoting", "1");
		$tmp6 = $s->toString();
		$h->setParam("__x", $tmp6);
		$h->attachUploads($s->uploads);
		$h->send();
		{
			$GLOBALS['%s']->pop();
			return $result;
		}
		$GLOBALS['%s']->pop();
	}
	static $TIMEOUT = 10.;
	static function urlConnect($url) {
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::urlConnect");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = new ufront_remoting_HttpConnection($url, (new _hx_array(array())));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.remoting.HttpConnection'; }
}
function ufront_remoting_HttpConnection_0($v) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call@37");
		$__hx__spos = $GLOBALS['%s']->length;
		throw new HException($v);
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpConnection_1(&$result, $v1) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call@38");
		$__hx__spos = $GLOBALS['%s']->length;
		$result = $v1;
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpConnection_2(&$responseCode, &$status, $s1) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call@39");
		$__hx__spos = $GLOBALS['%s']->length;
		$responseCode = $status;
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpConnection_3(&$remotingCallString, &$responseText, &$setResult, &$throwError, $str) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call@40");
		$__hx__spos = $GLOBALS['%s']->length;
		$responseText = $str;
		ufront_remoting_RemotingUtil::processResponse($responseText, $setResult, $throwError, $remotingCallString);
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpConnection_4(&$h, &$remotingCallString, &$responseCode, &$setResult, &$throwError, $errorData) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpConnection::call@44");
		$__hx__spos = $GLOBALS['%s']->length;
		if(500 === $responseCode) {
			$tmp3 = $h->responseData();
			ufront_remoting_RemotingUtil::processResponse($tmp3, $setResult, $throwError, $remotingCallString);
		} else {
			$tmp4 = $h->responseData();
			$tmp5 = ufront_remoting_RemotingError::RHttpError($remotingCallString, $responseCode, $tmp4);
			call_user_func_array($throwError, array($tmp5));
		}
		$GLOBALS['%s']->pop();
	}
}
