<?php

// Generated by Haxe 3.3.0
class tink_core__Future_Future_Impl_ {
	public function __construct(){}
	static function _new($f) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $f;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function handle($this1, $callback) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::handle");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = call_user_func_array($this1, array($callback));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function gather($this1) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::gather");
		$__hx__spos = $GLOBALS['%s']->length;
		$op = new tink_core_FutureTrigger();
		$self = $this1;
		{
			$tmp = tink_core__Future_Future_Impl_::_new(array(new _hx_lambda(array(&$op, &$self, &$this1), "tink_core__Future_Future_Impl__0"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function first($this1, $other) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::first");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::async(array(new _hx_lambda(array(&$other, &$this1), "tink_core__Future_Future_Impl__1"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function map($this1, $f, $gather = null) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::map");
		$__hx__spos = $GLOBALS['%s']->length;
		if($gather === null) {
			$gather = true;
		}
		$ret = tink_core__Future_Future_Impl_::_new(array(new _hx_lambda(array(&$f, &$this1), "tink_core__Future_Future_Impl__2"), 'execute'));
		if($gather) {
			$tmp = tink_core__Future_Future_Impl_::gather($ret);
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function flatMap($this1, $next, $gather = null) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::flatMap");
		$__hx__spos = $GLOBALS['%s']->length;
		if($gather === null) {
			$gather = true;
		}
		$tmp = tink_core__Future_Future_Impl_::map($this1, $next, $gather);
		$ret = tink_core__Future_Future_Impl_::flatten($tmp);
		if($gather) {
			$tmp2 = tink_core__Future_Future_Impl_::gather($ret);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function merge($this1, $other, $merger, $gather = null) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::merge");
		$__hx__spos = $GLOBALS['%s']->length;
		if($gather === null) {
			$gather = true;
		}
		{
			$tmp = tink_core__Future_Future_Impl_::flatMap($this1, array(new _hx_lambda(array(&$merger, &$other), "tink_core__Future_Future_Impl__3"), 'execute'), $gather);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function flatten($f) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::flatten");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::_new(array(new _hx_lambda(array(&$f), "tink_core__Future_Future_Impl__4"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromTrigger($trigger) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::fromTrigger");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = (isset($trigger->future) ? $trigger->future: array($trigger, "future"));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function ofMany($futures, $gather = null) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::ofMany");
		$__hx__spos = $GLOBALS['%s']->length;
		if($gather === null) {
			$gather = true;
		}
		$ret = tink_core__Future_Future_Impl_::sync((new _hx_array(array())));
		{
			$_g = 0;
			while($_g < $futures->length) {
				$f = $futures[$_g];
				++$_g;
				$ret = tink_core__Future_Future_Impl_::flatMap($ret, array(new _hx_lambda(array(&$f), "tink_core__Future_Future_Impl__5"), 'execute'), false);
				unset($f);
			}
		}
		if($gather) {
			$tmp = tink_core__Future_Future_Impl_::gather($ret);
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromMany($futures) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::fromMany");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::ofMany($futures, null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function lazy($l) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::lazy");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::_new(array(new _hx_lambda(array(&$l), "tink_core__Future_Future_Impl__6"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function sync($v) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::sync");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::_new(array(new _hx_lambda(array(&$v), "tink_core__Future_Future_Impl__7"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function async($f, $lazy = null) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::async");
		$__hx__spos = $GLOBALS['%s']->length;
		if($lazy === null) {
			$lazy = false;
		}
		if($lazy) {
			$f1 = $f;
			$tmp = array(new _hx_lambda(array(&$f1), "tink_core__Future_Future_Impl__8"), 'execute');
			$tmp1 = tink_core__Future_Future_Impl_::lazy(tink_core__Lazy_Lazy_Impl_::ofFunc($tmp));
			{
				$tmp2 = tink_core__Future_Future_Impl_::flatten($tmp1);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$op = new tink_core_FutureTrigger();
			call_user_func_array($f, array((isset($op->trigger) ? $op->trigger: array($op, "trigger"))));
			{
				$tmp = (isset($op->future) ? $op->future: array($op, "future"));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function hor($a, $b) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::or");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::first($a, $b);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function either($a, $b) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::either");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = tink_core__Future_Future_Impl_::map($a, (isset(tink_core_Either::$Left) ? tink_core_Either::$Left: array("tink_core_Either", "Left")), false);
		$tmp1 = tink_core__Future_Future_Impl_::map($b, (isset(tink_core_Either::$Right) ? tink_core_Either::$Right: array("tink_core_Either", "Right")), false);
		{
			$tmp2 = tink_core__Future_Future_Impl_::first($tmp, $tmp1);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function hand($a, $b) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::and");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::merge($a, $b, array(new _hx_lambda(array(), "tink_core__Future_Future_Impl__9"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _tryFailingFlatMap($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFailingFlatMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::flatMap($f, array(new _hx_lambda(array(&$map), "tink_core__Future_Future_Impl__10"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _tryFlatMap($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFlatMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::flatMap($f, array(new _hx_lambda(array(&$map), "tink_core__Future_Future_Impl__11"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _tryFailingMap($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFailingMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($f, array(new _hx_lambda(array(&$map), "tink_core__Future_Future_Impl__12"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _tryMap($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($f, array(new _hx_lambda(array(&$map), "tink_core__Future_Future_Impl__13"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _flatMap($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_flatMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::flatMap($f, $map, null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function _map($f, $map) {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_map");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($f, $map, null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function trigger() {
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = new tink_core_FutureTrigger();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'tink.core._Future.Future_Impl_'; }
}
function tink_core__Future_Future_Impl__0(&$op, &$self, &$this1, $cb) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::gather@18");
		$__hx__spos = $GLOBALS['%s']->length;
		if($self !== null) {
			$this1((isset($op->trigger) ? $op->trigger: array($op, "trigger")));
			$self = null;
		}
		{
			$tmp = $op->future($cb);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__1(&$other, &$this1, $cb) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::first@28");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1($cb);
		$other($cb);
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__2(&$f, &$this1, $callback) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::map@34");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = call_user_func_array($this1, array(array(new _hx_lambda(array(&$callback, &$f), "tink_core__Future_Future_Impl__14"), 'execute')));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__3(&$merger, &$other, $t) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::merge@48");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($other, array(new _hx_lambda(array(&$merger, &$t), "tink_core__Future_Future_Impl__15"), 'execute'), false);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__4(&$f, $callback) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::flatten@53");
		$__hx__spos = $GLOBALS['%s']->length;
		$ret = null;
		$ret = $f(array(new _hx_lambda(array(&$callback, &$ret), "tink_core__Future_Future_Impl__16"), 'execute'));
		{
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__5(&$f, $results) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::ofMany@68");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($f, array(new _hx_lambda(array(&$results), "tink_core__Future_Future_Impl__17"), 'execute'), false);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__6(&$l, $cb) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::lazy@86");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$data = $l();
			$cb($data);
		}
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__7(&$v, $callback) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::sync@89");
		$__hx__spos = $GLOBALS['%s']->length;
		$callback($v);
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__8(&$f1) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::async@93");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::async($f1, false);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__9($a1, $b1) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::and@107");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1 = new tink_core_MPair($a1, $b1);
		{
			$tmp = $this1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__10(&$map, $o) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFailingFlatMap@110");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $o->index;
		switch($tmp) {
		case 0:{
			$tmp2 = call_user_func_array($map, array(_hx_deref($o)->params[0]));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}break;
		case 1:{
			$tmp1 = tink_core_Outcome::Failure(_hx_deref($o)->params[0]);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($tmp1);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__11(&$map, $o) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFlatMap@116");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $o->index;
		switch($tmp) {
		case 0:{
			$tmp1 = call_user_func_array($map, array(_hx_deref($o)->params[0]));
			{
				$tmp2 = tink_core__Future_Future_Impl_::map($tmp1, (isset(tink_core_Outcome::$Success) ? tink_core_Outcome::$Success: array("tink_core_Outcome", "Success")), null);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		case 1:{
			$tmp2 = tink_core_Outcome::Failure(_hx_deref($o)->params[0]);
			{
				$tmp3 = tink_core__Future_Future_Impl_::sync($tmp2);
				$GLOBALS['%s']->pop();
				return $tmp3;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__12(&$map, $o) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryFailingMap@122");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core_OutcomeTools::flatMap($o, tink_core__Outcome_OutcomeMapper_Impl_::withSameError($map));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__13(&$map, $o) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::_tryMap@125");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $o->index;
		switch($tmp) {
		case 0:{
			$tmp1 = call_user_func_array($map, array(_hx_deref($o)->params[0]));
			{
				$tmp2 = tink_core_Outcome::Success($tmp1);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		case 1:{
			$tmp2 = tink_core_Outcome::Failure(_hx_deref($o)->params[0]);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__14(&$callback, &$f, $result) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger@34");
		$__hx__spos = $GLOBALS['%s']->length;
		$data = call_user_func_array($f, array($result));
		$callback($data);
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__15(&$merger, &$t, $a) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger@49");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = call_user_func_array($merger, array($t, $a));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__16(&$callback, &$ret, $next) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger@55");
		$__hx__spos = $GLOBALS['%s']->length;
		$ret = $next(array(new _hx_lambda(array(&$callback), "tink_core__Future_Future_Impl__18"), 'execute'));
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__17(&$results, $result) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger@70");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $results->concat((new _hx_array(array($result))));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function tink_core__Future_Future_Impl__18(&$callback, $result) {
	{
		$GLOBALS['%s']->push("tink.core._Future.Future_Impl_::trigger@56");
		$__hx__spos = $GLOBALS['%s']->length;
		$callback($result);
		$GLOBALS['%s']->pop();
	}
}
