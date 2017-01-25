<?php

// Generated by Haxe 3.3.0
class haxe_io_FPHelper {
	public function __construct(){}
	static $i64tmp;
	static $isLittleEndian;
	static function i32ToFloat($i) {
		$GLOBALS['%s']->push("haxe.io.FPHelper::i32ToFloat");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = unpack("f", pack("l", $i));
		{
			$tmp2 = $tmp[1];
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function floatToI32($f) {
		$GLOBALS['%s']->push("haxe.io.FPHelper::floatToI32");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = unpack("l", pack("f", $f));
		{
			$tmp2 = $tmp[1];
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function i64ToDouble($low, $high) {
		$GLOBALS['%s']->push("haxe.io.FPHelper::i64ToDouble");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = unpack("d", pack("ii", ((haxe_io_FPHelper::$isLittleEndian) ? $low : $high), ((haxe_io_FPHelper::$isLittleEndian) ? $high : $low)));
		{
			$tmp2 = $tmp[1];
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function doubleToI64($v) {
		$GLOBALS['%s']->push("haxe.io.FPHelper::doubleToI64");
		$__hx__spos = $GLOBALS['%s']->length;
		$a = unpack(((haxe_io_FPHelper::$isLittleEndian) ? "V2" : "N2"), pack("d", $v));
		$i64 = haxe_io_FPHelper::$i64tmp;
		{
			{
				$tmp = null;
				if(haxe_io_FPHelper::$isLittleEndian) {
					$tmp = 1;
				} else {
					$tmp = 2;
				}
				$x = $a[$tmp];
				$i64->low = $x;
			}
			{
				$tmp1 = null;
				if(haxe_io_FPHelper::$isLittleEndian) {
					$tmp1 = 2;
				} else {
					$tmp1 = 1;
				}
				$x1 = $a[$tmp1];
				$i64->high = $x1;
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $i64;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'haxe.io.FPHelper'; }
}
haxe_io_FPHelper::$i64tmp = haxe_io_FPHelper_0();
haxe_io_FPHelper::$isLittleEndian = haxe_io_FPHelper_1();
function haxe_io_FPHelper_0() {
	{
		$x = new haxe__Int64____Int64(0, 0);
		return $x;
	}
}
function haxe_io_FPHelper_1() {
	{
		$tmp = unpack("S", "\x01\x00");
		return $tmp[1] === 1;
	}
}