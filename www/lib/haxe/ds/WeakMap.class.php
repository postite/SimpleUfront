<?php

// Generated by Haxe 3.3.0
class haxe_ds_WeakMap implements haxe_IMap{
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::new");
		$__hx__spos = $GLOBALS['%s']->length;
		throw new HException("Not implemented for this platform");
		$GLOBALS['%s']->pop();
	}}
	public function set($key, $value) {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::set");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function get($key) {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::get");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function exists($key) {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function remove($key) {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function keys() {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::keys");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function iterator() {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::iterator");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("haxe.ds.WeakMap::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return $this->toString(); }
}
