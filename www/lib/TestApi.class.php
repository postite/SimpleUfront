<?php

// Generated by Haxe 3.3.0
class TestApi extends ufront_api_UFApi {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("TestApi::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct();
		$GLOBALS['%s']->pop();
	}}
	public function gimmeSomething() {
		$GLOBALS['%s']->push("TestApi::gimmeSomething");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return "You've got something:";
		}
		$GLOBALS['%s']->pop();
	}
	public function gimmeJson() {
		$GLOBALS['%s']->push("TestApi::gimmeJson");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Sys::getCwd();
		$jsonStr = sys_io_File::getContent(_hx_string_or_null($tmp) . "data/jsonData.json");
		{
			$GLOBALS['%s']->pop();
			return $jsonStr;
		}
		$GLOBALS['%s']->pop();
	}
	public function saveJsonData($_jsonStr) {
		$GLOBALS['%s']->push("TestApi::saveJsonData");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Sys::getCwd();
		sys_io_File::saveContent(_hx_string_or_null($tmp) . "data/jsonData.json", $_jsonStr);
		{
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	function __toString() { return 'TestApi'; }
}
TestApi::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("asyncApi" => (new _hx_array(array("AsyncTestApi"))))), "fields" => _hx_anonymous(array("gimmeSomething" => _hx_anonymous(array("returnType" => (new _hx_array(array(0))))), "gimmeJson" => _hx_anonymous(array("returnType" => (new _hx_array(array(0))))), "saveJsonData" => _hx_anonymous(array("returnType" => (new _hx_array(array(0)))))))));
