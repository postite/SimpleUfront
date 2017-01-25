<?php

// Generated by Haxe 3.3.0
class ufront_web_session_VoidSession implements ufront_web_session_UFHttpSession{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}}
	public $id;
	public function setExpiry($e) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::setExpiry");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function init() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::init");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
		{
			$tmp2 = tink_core__Future_Future_Impl_::sync($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function commit() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::commit");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
		{
			$tmp2 = tink_core__Future_Future_Impl_::sync($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function triggerCommit() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::triggerCommit");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function isActive() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::isActive");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function isReady() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::isReady");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function get($name) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::get");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function set($name, $value) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::set");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function exists($name) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function remove($name) {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function clear() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::clear");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function regenerateID() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::regenerateID");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function close() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::close");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function get_id() {
		$GLOBALS['%s']->push("ufront.web.session.VoidSession::get_id");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
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
	static $__properties__ = array("get_id" => "get_id");
	function __toString() { return 'ufront.web.session.VoidSession'; }
}