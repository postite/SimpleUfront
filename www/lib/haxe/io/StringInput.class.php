<?php

// Generated by Haxe 3.3.0
class haxe_io_StringInput extends haxe_io_BytesInput {
	public function __construct($s) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("haxe.io.StringInput::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct(haxe_io_Bytes::ofString($s),null,null);
		$GLOBALS['%s']->pop();
	}}
	static $__properties__ = array("get_length" => "get_length","set_position" => "set_position","get_position" => "get_position","set_bigEndian" => "set_bigEndian");
	function __toString() { return 'haxe.io.StringInput'; }
}