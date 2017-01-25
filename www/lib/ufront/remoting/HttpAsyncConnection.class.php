<?php

// Generated by Haxe 3.3.0
class ufront_remoting_HttpAsyncConnection extends haxe_remoting_HttpAsyncConnection {
	public function __construct($data, $path) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct($data,$path);
		$GLOBALS['%s']->pop();
	}}
	public function resolve($name) {
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::resolve");
		$__hx__spos = $GLOBALS['%s']->length;
		$dataCopy = _hx_anonymous(array("url" => $this->__data->url, "error" => (isset($this->__data->error) ? $this->__data->error: array($this->__data, "error"))));
		$tmp = $this->__path->copy();
		$c = new ufront_remoting_HttpAsyncConnection($dataCopy, $tmp);
		$c->__path->push($name);
		{
			$GLOBALS['%s']->pop();
			return $c;
		}
		$GLOBALS['%s']->pop();
	}
	public function call($params, $onResult = null) {
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::call");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$h = new ufront_remoting_HttpWithUploads($this->__data->url, true, null);
		$h->setHeader("X-Haxe-Remoting", "1");
		$h->setHeader("X-Ufront-Remoting", "1");
		$s = new ufront_remoting_RemotingSerializer(ufront_remoting_RemotingDirection::$RDClientToServer);
		$s->serialize($this->__path);
		$s->serialize($params);
		$tmp = $s->toString();
		$h->setParam("__x", $tmp);
		$tmp1 = $this->__path->join(".");
		$tmp2 = _hx_string_or_null($tmp1) . "(";
		$tmp3 = $params->join(",");
		$remotingCallString = _hx_string_or_null($tmp2) . _hx_string_or_null($tmp3) . ")";
		$responseCode = null;
		$onStatus = array(new _hx_lambda(array(&$responseCode), "ufront_remoting_HttpAsyncConnection_0"), 'execute');
		$onData = array(new _hx_lambda(array(&$_gthis, &$onResult, &$remotingCallString), "ufront_remoting_HttpAsyncConnection_1"), 'execute');
		$onError = array(new _hx_lambda(array(&$_gthis, &$h, &$onResult, &$remotingCallString, &$responseCode), "ufront_remoting_HttpAsyncConnection_2"), 'execute');
		$h->handle($onStatus, $onData, $onError);
		$uploadsReady = $h->attachUploads($s->uploads);
		$uploadsReady(array(new _hx_lambda(array(&$h, &$onError, &$onStatus), "ufront_remoting_HttpAsyncConnection_3"), 'execute'));
		$GLOBALS['%s']->pop();
	}
	static function urlConnect($url, $errorHandler = null) {
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::urlConnect");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $errorHandler === null;
		if($tmp) {
			$errorHandler = (isset(ufront_remoting_RemotingUtil::$defaultErrorHandler) ? ufront_remoting_RemotingUtil::$defaultErrorHandler: array("ufront_remoting_RemotingUtil", "defaultErrorHandler"));
		}
		{
			$tmp2 = new ufront_remoting_HttpAsyncConnection(_hx_anonymous(array("url" => $url, "error" => $errorHandler)), (new _hx_array(array())));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.remoting.HttpAsyncConnection'; }
}
function ufront_remoting_HttpAsyncConnection_0(&$responseCode, $status) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::call@39");
		$__hx__spos = $GLOBALS['%s']->length;
		$responseCode = $status;
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpAsyncConnection_1(&$_gthis, &$onResult, &$remotingCallString, $data) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::call@40");
		$__hx__spos = $GLOBALS['%s']->length;
		ufront_remoting_RemotingUtil::processResponse($data, $onResult, (isset($_gthis->__data->error) ? $_gthis->__data->error: array($_gthis->__data, "error")), $remotingCallString);
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpAsyncConnection_2(&$_gthis, &$h, &$onResult, &$remotingCallString, &$responseCode, $errorData) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::call@41");
		$__hx__spos = $GLOBALS['%s']->length;
		if(500 === $responseCode) {
			$tmp4 = $h->responseData();
			ufront_remoting_RemotingUtil::processResponse($tmp4, $onResult, (isset($_gthis->__data->error) ? $_gthis->__data->error: array($_gthis->__data, "error")), $remotingCallString);
		} else {
			if(404 === $responseCode) {
				$errorHandler = (isset($_gthis->__data->error) ? $_gthis->__data->error: array($_gthis->__data, "error"));
				$tmp5 = $h->responseData();
				$tmp6 = ufront_remoting_RemotingError::RApiNotFound($remotingCallString, $tmp5);
				call_user_func_array($errorHandler, array($tmp6));
			} else {
				$errorHandler1 = (isset($_gthis->__data->error) ? $_gthis->__data->error: array($_gthis->__data, "error"));
				$tmp7 = $h->responseData();
				$tmp8 = ufront_remoting_RemotingError::RHttpError($remotingCallString, $responseCode, $tmp7);
				call_user_func_array($errorHandler1, array($tmp8));
			}
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpAsyncConnection_3(&$h, &$onError, &$onStatus, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpAsyncConnection::call@63");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp9 = $outcome->index;
		switch($tmp9) {
		case 0:{
			$h->send();
		}break;
		case 1:{
			call_user_func_array($onStatus, array(0));
			$tmp10 = Std::string(_hx_deref($outcome)->params[0]);
			call_user_func_array($onError, array("Failed to read attachments: " . _hx_string_or_null($tmp10)));
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}