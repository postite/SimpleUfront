<?php

// Generated by Haxe 3.3.0
class tink_core__Callback_Callback_Impl_ {
	public function __construct(){}
	static function _new($f) {
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $f;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function invoke($this1, $data) {
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::invoke");
		$__hx__spos = $GLOBALS['%s']->length;
		call_user_func_array($this1, array($data));
		$GLOBALS['%s']->pop();
	}
	static function fromNiladic($f) {
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::fromNiladic");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1 = array(new _hx_lambda(array(&$f), "tink_core__Callback_Callback_Impl__0"), 'execute');
		{
			$tmp = $this1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromMany($callbacks) {
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::fromMany");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = array(new _hx_lambda(array(&$callbacks), "tink_core__Callback_Callback_Impl__1"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'tink.core._Callback.Callback_Impl_'; }
}
function tink_core__Callback_Callback_Impl__0(&$f, $r) {
	{
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::fromNiladic@12");
		$__hx__spos = $GLOBALS['%s']->length;
		call_user_func($f);
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Callback_Callback_Impl__1(&$callbacks, $v) {
	{
		$GLOBALS['%s']->push("tink.core._Callback.Callback_Impl_::fromMany@16");
		$__hx__spos = $GLOBALS['%s']->length;
		$_g = 0;
		while($_g < $callbacks->length) {
			$callback = $callbacks[$_g];
			++$_g;
			$callback($v);
			unset($callback);
		}
		$GLOBALS['%s']->pop();
	}
}