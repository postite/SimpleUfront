<?php

// Generated by Haxe 3.3.0
class erazor_error_ParserError {
	public function __construct($msg, $pos, $excerpt = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("erazor.error.ParserError::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->msg = $msg;
		$this->pos = $pos;
		$this->excerpt = $excerpt;
		$GLOBALS['%s']->pop();
	}}
	public $msg;
	public $pos;
	public $excerpt;
	public function toString() {
		$GLOBALS['%s']->push("erazor.error.ParserError::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$excerpt = $this->excerpt;
		if($excerpt !== null) {
			$nl = _hx_index_of($excerpt, "\x0A", null);
			if($nl !== -1) {
				$excerpt = _hx_substr($excerpt, 0, $nl);
			}
		}
		$tmp = _hx_string_or_null($this->msg) . " @ " . _hx_string_rec($this->pos, "");
		$tmp1 = null;
		if($excerpt !== null) {
			$tmp1 = " ( \"" . _hx_string_or_null($excerpt) . "\" )";
		} else {
			$tmp1 = "";
		}
		{
			$tmp2 = _hx_string_or_null($tmp) . _hx_string_or_null($tmp1);
			$GLOBALS['%s']->pop();
			return $tmp2;
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
	function __toString() { return $this->toString(); }
}
