<?php

// Generated by Haxe 3.3.0
class ufront_api_UFApiContext {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.api.UFApiContext::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}}
	public $injector;
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
	static function getApisInContext($context) {
		$GLOBALS['%s']->push("ufront.api.UFApiContext::getApisInContext");
		$__hx__spos = $GLOBALS['%s']->length;
		$apis = (new _hx_array(array()));
		$meta = haxe_rtti_Meta::getType($context);
		if($meta->apiList !== null) {
			$_g = 0;
			$_g1 = $meta->apiList;
			while($_g < $_g1->length) {
				$apiName = $_g1[$_g];
				++$_g;
				$api = Type::resolveClass($apiName);
				if($api !== null) {
					$apis->push($api);
				}
				unset($apiName,$api);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $apis;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.api.UFApiContext'; }
}
