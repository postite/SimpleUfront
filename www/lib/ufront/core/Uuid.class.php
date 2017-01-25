<?php

// Generated by Haxe 3.3.0
class ufront_core_Uuid {
	public function __construct(){}
	static function random($outOf) {
		$GLOBALS['%s']->push("ufront.core.Uuid::random");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Math::random();
		{
			$tmp2 = Math::floor($tmp * $outOf);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function srandom() {
		$GLOBALS['%s']->push("ufront.core.Uuid::srandom");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Math::random();
		$tmp1 = Math::floor($tmp * 16);
		{
			$tmp2 = _hx_char_at("0123456789ABCDEF", $tmp1);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function create() {
		$GLOBALS['%s']->push("ufront.core.Uuid::create");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = (new _hx_array(array()));
		{
			$_g = 0;
			while($_g < 8) {
				$i = $_g++;
				$tmp = Math::random();
				$tmp1 = Math::floor($tmp * 16);
				$tmp2 = _hx_char_at("0123456789ABCDEF", $tmp1);
				$s[$i] = $tmp2;
				unset($tmp2,$tmp1,$tmp,$i);
			}
		}
		$s[8] = "-";
		{
			$_g1 = 9;
			while($_g1 < 13) {
				$i1 = $_g1++;
				$tmp3 = Math::random();
				$tmp4 = Math::floor($tmp3 * 16);
				$tmp5 = _hx_char_at("0123456789ABCDEF", $tmp4);
				$s[$i1] = $tmp5;
				unset($tmp5,$tmp4,$tmp3,$i1);
			}
		}
		$s[13] = "-";
		$s[14] = "4";
		{
			$_g2 = 15;
			while($_g2 < 18) {
				$i2 = $_g2++;
				$tmp6 = Math::random();
				$tmp7 = Math::floor($tmp6 * 16);
				$tmp8 = _hx_char_at("0123456789ABCDEF", $tmp7);
				$s[$i2] = $tmp8;
				unset($tmp8,$tmp7,$tmp6,$i2);
			}
		}
		$s[18] = "-";
		$tmp9 = Math::random();
		$tmp10 = Math::floor($tmp9 * 4);
		$tmp11 = _hx_char_at("89AB", $tmp10);
		$s[19] = "" . _hx_string_or_null($tmp11);
		{
			$_g3 = 20;
			while($_g3 < 23) {
				$i3 = $_g3++;
				$tmp12 = Math::random();
				$tmp13 = Math::floor($tmp12 * 16);
				$tmp14 = _hx_char_at("0123456789ABCDEF", $tmp13);
				$s[$i3] = $tmp14;
				unset($tmp14,$tmp13,$tmp12,$i3);
			}
		}
		$s[23] = "-";
		{
			$_g4 = 24;
			while($_g4 < 36) {
				$i4 = $_g4++;
				$tmp15 = Math::random();
				$tmp16 = Math::floor($tmp15 * 16);
				$tmp17 = _hx_char_at("0123456789ABCDEF", $tmp16);
				$s[$i4] = $tmp17;
				unset($tmp17,$tmp16,$tmp15,$i4);
			}
		}
		{
			$tmp = $s->join("");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function isValid($s) {
		$GLOBALS['%s']->push("ufront.core.Uuid::isValid");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_deref(new EReg("[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}", ""))->match($s);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.core.Uuid'; }
}
