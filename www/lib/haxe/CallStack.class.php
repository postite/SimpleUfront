<?php

// Generated by Haxe 3.3.0
class haxe_CallStack {
	public function __construct(){}
	static function callStack() {
		$GLOBALS['%s']->push("haxe.CallStack::callStack");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe_CallStack::makeStack("%s");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function exceptionStack() {
		$GLOBALS['%s']->push("haxe.CallStack::exceptionStack");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe_CallStack::makeStack("%e");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function toString($stack) {
		$GLOBALS['%s']->push("haxe.CallStack::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$b = new StringBuf();
		{
			$_g = 0;
			while($_g < $stack->length) {
				$s = $stack[$_g];
				++$_g;
				$b->add("\x0ACalled from ");
				haxe_CallStack::itemToString($b, $s);
				unset($s);
			}
		}
		{
			$tmp = $b->b;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function itemToString($b, $s) {
		$GLOBALS['%s']->push("haxe.CallStack::itemToString");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $s->index;
		switch($tmp) {
		case 0:{
			$b->add("a C function");
		}break;
		case 1:{
			$b->add("module ");
			$b->add(_hx_deref($s)->params[0]);
		}break;
		case 2:{
			$line = _hx_deref($s)->params[2];
			$file = _hx_deref($s)->params[1];
			$s1 = _hx_deref($s)->params[0];
			{
				if($s1 !== null) {
					haxe_CallStack::itemToString($b, $s1);
					$b->add(" (");
				}
				$b->add($file);
				$b->add(" line ");
				$b->add($line);
				if($s1 !== null) {
					$b->add(")");
				}
			}
		}break;
		case 3:{
			$b->add(_hx_deref($s)->params[0]);
			$b->add(".");
			$b->add(_hx_deref($s)->params[1]);
		}break;
		case 4:{
			$b->add("local function #");
			$b->add(_hx_deref($s)->params[0]);
		}break;
		}
		$GLOBALS['%s']->pop();
	}
	static function makeStack($s) {
		$GLOBALS['%s']->push("haxe.CallStack::makeStack");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !isset($GLOBALS[$s]);
		if($tmp) {
			$tmp2 = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$a = $GLOBALS[$s];
		$m = (new _hx_array(array()));
		{
			$_g1 = 0;
			$tmp1 = null;
			if($s === "%s") {
				$tmp1 = 2;
			} else {
				$tmp1 = 0;
			}
			$_g = $a->length - $tmp1;
			while($_g1 < $_g) {
				$i = $_g1++;
				$d = _hx_explode("::", $a[$i]);
				$tmp2 = $d[0];
				$tmp3 = $d[1];
				$tmp4 = haxe_StackItem::Method($tmp2, $tmp3);
				$m->unshift($tmp4);
				unset($tmp4,$tmp3,$tmp2,$i,$d);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $m;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'haxe.CallStack'; }
}
