<?php

// Generated by Haxe 3.3.0
class ufront_api_UFApiClientContext {
	public function __construct($url, $errorHandler = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.api.UFApiClientContext::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->cnx = ufront_remoting_HttpAsyncConnection::urlConnect($url, $errorHandler);
		$GLOBALS['%s']->pop();
	}}
	public $cnx;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	function __toString() { return 'ufront.api.UFApiClientContext'; }
}
