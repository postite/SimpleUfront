<?php

// Generated by Haxe 3.3.0
class AsyncTestApi extends ufront_api_UFAsyncApi {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("AsyncTestApi::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct();
		$GLOBALS['%s']->pop();
	}}
	public function gimmeSomething() {
		$GLOBALS['%s']->push("AsyncTestApi::gimmeSomething");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->_makeApiCall("gimmeSomething", (new _hx_array(array())), 0, _hx_anonymous(array("methodName" => "gimmeSomething", "lineNumber" => 0, "customParams" => null, "fileName" => "TestApi.hx", "className" => "AsyncTestApi")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function gimmeJson() {
		$GLOBALS['%s']->push("AsyncTestApi::gimmeJson");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->_makeApiCall("gimmeJson", (new _hx_array(array())), 0, _hx_anonymous(array("methodName" => "gimmeJson", "lineNumber" => 0, "customParams" => null, "fileName" => "TestApi.hx", "className" => "AsyncTestApi")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function saveJsonData($_jsonStr) {
		$GLOBALS['%s']->push("AsyncTestApi::saveJsonData");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->_makeApiCall("saveJsonData", (new _hx_array(array($_jsonStr))), 0, _hx_anonymous(array("methodName" => "saveJsonData", "lineNumber" => 0, "customParams" => null, "fileName" => "TestApi.hx", "className" => "AsyncTestApi")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function injectApi($injector) {
		$GLOBALS['%s']->push("AsyncTestApi::injectApi");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		try {
			$tmp = $injector->getValueForType("TestApi", null);
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$tmp1 = "Failed to inject " . _hx_string_or_null(Type::getClassName(_hx_qtype("TestApi"))) . " into ";
				$tmp2 = Type::getClass($this);
				throw new HException(ufront_web_HttpError::internalServerError(_hx_string_or_null($tmp1) . _hx_string_or_null(Type::getClassName($tmp2)), $e, _hx_anonymous(array("fileName" => "ApiMacros.hx", "lineNumber" => 272, "className" => "AsyncTestApi", "methodName" => "injectApi"))));
			}
		}
		$this->api = $tmp;
		$this->className = "TestApi";
		$GLOBALS['%s']->pop();
	}
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	static function _getClass() {
		$GLOBALS['%s']->push("AsyncTestApi::_getClass");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_qtype("TestApi");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'AsyncTestApi'; }
}
AsyncTestApi::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("rtti" => (new _hx_array(array((new _hx_array(array("injectApi", "", "minject.Injector", "", ""))))))))));