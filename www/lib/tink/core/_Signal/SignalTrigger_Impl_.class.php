<?php

// Generated by Haxe 3.3.0
class tink_core__Signal_SignalTrigger_Impl_ {
	public function __construct(){}
	static function _new() {
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function trigger($this1, $event) {
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::trigger");
		$__hx__spos = $GLOBALS['%s']->length;
		tink_core__Callback_CallbackList_Impl_::invoke($this1, $event);
		$GLOBALS['%s']->pop();
	}
	static function getLength($this1) {
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::getLength");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->length;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function clear($this1) {
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::clear");
		$__hx__spos = $GLOBALS['%s']->length;
		tink_core__Callback_CallbackList_Impl_::clear($this1);
		$GLOBALS['%s']->pop();
	}
	static function asSignal($this1) {
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::asSignal");
		$__hx__spos = $GLOBALS['%s']->length;
		$this2 = null;
		$_e = $this1;
		$this2 = array(new _hx_lambda(array(&$_e), "tink_core__Signal_SignalTrigger_Impl__0"), 'execute');
		{
			$tmp = $this2;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'tink.core._Signal.SignalTrigger_Impl_'; }
}
function tink_core__Signal_SignalTrigger_Impl__0(&$_e, $cb) {
	{
		$GLOBALS['%s']->push("tink.core._Signal.SignalTrigger_Impl_::asSignal@87");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Callback_CallbackList_Impl_::add($_e, $cb);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
