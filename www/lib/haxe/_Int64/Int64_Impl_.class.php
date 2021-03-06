<?php

// Generated by Haxe 3.3.0
class haxe__Int64_Int64_Impl_ {
	public function __construct(){}
	static function _new($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function copy($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::copy");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($this1->high, $this1->low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function make($high, $low) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::make");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function ofInt($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::ofInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x1 = new haxe__Int64____Int64($x >> 31, $x);
		{
			$tmp = $x1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function toInt($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::toInt");
		$__hx__spos = $GLOBALS['%s']->length;
		if($x->high !== $x->low >> 31) {
			throw new HException("Overflow");
		}
		{
			$tmp = $x->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function is($val) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::is");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = Std::is($val, _hx_qtype("haxe._Int64.___Int64"));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getHigh($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::getHigh");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $x->high;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getLow($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::getLow");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $x->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function isNeg($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::isNeg");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $x->high < 0;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function isZero($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::isZero");
		$__hx__spos = $GLOBALS['%s']->length;
		$x1 = new haxe__Int64____Int64(0, 0);
		$b = $x1;
		if($x->high === $b->high) {
			$tmp = $x->low === $b->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static function compare($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::compare");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
		}
		if($a->high < 0) {
			if($b->high < 0) {
				$GLOBALS['%s']->pop();
				return $v;
			} else {
				$GLOBALS['%s']->pop();
				return -1;
			}
		} else {
			if($b->high >= 0) {
				$GLOBALS['%s']->pop();
				return $v;
			} else {
				$GLOBALS['%s']->pop();
				return 1;
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function ucompare($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::ucompare");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = haxe__Int32_Int32_Impl_::ucompare($a->high, $b->high);
		if($v !== 0) {
			$GLOBALS['%s']->pop();
			return $v;
		} else {
			$tmp = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function toStr($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::toStr");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe__Int64_Int64_Impl_::toString($x);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function toString($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$i = $this1;
		$x = new haxe__Int64____Int64(0, 0);
		$b = $x;
		$tmp = null;
		if($i->high === $b->high) {
			$tmp = $i->low === $b->low;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$GLOBALS['%s']->pop();
			return "0";
		}
		$str = "";
		$neg = false;
		if($i->high < 0) {
			$neg = true;
		}
		$x1 = new haxe__Int64____Int64(0, 10);
		$ten = $x1;
		while(true) {
			$x2 = new haxe__Int64____Int64(0, 0);
			$b1 = $x2;
			$tmp1 = null;
			if(!($i->high !== $b1->high)) {
				$tmp1 = $i->low !== $b1->low;
			} else {
				$tmp1 = true;
			}
			if(!$tmp1) {
				break;
			}
			$r = haxe__Int64_Int64_Impl_::divMod($i, $ten);
			if($r->modulus->high < 0) {
				$x3 = $r->modulus;
				$high = ~$x3->high;
				$low = -$x3->low;
				if($low === 0) {
					++$high;
					$tmp2 = $high << haxe__Int32_Int32_Impl_::$extraBits;
					$high = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
					unset($tmp2);
				}
				$x4 = new haxe__Int64____Int64($high, $low);
				$str = _hx_string_rec($x4->low, "") . _hx_string_or_null($str);
				$x5 = $r->quotient;
				$high1 = ~$x5->high;
				$low1 = -$x5->low;
				if($low1 === 0) {
					++$high1;
					$tmp3 = $high1 << haxe__Int32_Int32_Impl_::$extraBits;
					$high1 = $tmp3 >> haxe__Int32_Int32_Impl_::$extraBits;
					unset($tmp3);
				}
				$x6 = new haxe__Int64____Int64($high1, $low1);
				$i = $x6;
				unset($x6,$x5,$x4,$x3,$low1,$low,$high1,$high);
			} else {
				$str = _hx_string_rec($r->modulus->low, "") . _hx_string_or_null($str);
				$i = $r->quotient;
			}
			unset($x2,$tmp1,$r,$b1);
		}
		if($neg) {
			$str = "-" . _hx_string_or_null($str);
		}
		{
			$GLOBALS['%s']->pop();
			return $str;
		}
		$GLOBALS['%s']->pop();
	}
	static function parseString($sParam) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::parseString");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe_Int64Helper::parseString($sParam);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromFloat($f) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::fromFloat");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe_Int64Helper::fromFloat($f);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function divMod($dividend, $divisor) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::divMod");
		$__hx__spos = $GLOBALS['%s']->length;
		if($divisor->high === 0) {
			switch($divisor->low) {
			case 0:{
				throw new HException("divide by zero");
			}break;
			case 1:{
				$x = new haxe__Int64____Int64($dividend->high, $dividend->low);
				$tmp = $x;
				$x1 = new haxe__Int64____Int64(0, 0);
				{
					$tmp2 = _hx_anonymous(array("quotient" => $tmp, "modulus" => $x1));
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			}break;
			}
		}
		$divSign = (is_object($_t = $dividend->high < 0) && ($_t instanceof Enum) ? $_t != $divisor->high < 0 : !_hx_equal($_t, $divisor->high < 0));
		$modulus = null;
		if($dividend->high < 0) {
			$high = ~$dividend->high;
			$low = -$dividend->low;
			if($low === 0) {
				++$high;
				$tmp1 = $high << haxe__Int32_Int32_Impl_::$extraBits;
				$high = $tmp1 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			$x2 = new haxe__Int64____Int64($high, $low);
			$modulus = $x2;
		} else {
			$x3 = new haxe__Int64____Int64($dividend->high, $dividend->low);
			$modulus = $x3;
		}
		$tmp2 = $divisor->high < 0;
		if($tmp2) {
			$high1 = ~$divisor->high;
			$low1 = -$divisor->low;
			if($low1 === 0) {
				++$high1;
				$tmp3 = $high1 << haxe__Int32_Int32_Impl_::$extraBits;
				$high1 = $tmp3 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			$x4 = new haxe__Int64____Int64($high1, $low1);
			$divisor = $x4;
		} else {
			$divisor = $divisor;
		}
		$x5 = new haxe__Int64____Int64(0, 0);
		$quotient = $x5;
		$x6 = new haxe__Int64____Int64(0, 1);
		$mask = $x6;
		while(!($divisor->high < 0)) {
			$v = haxe__Int32_Int32_Impl_::ucompare($divisor->high, $modulus->high);
			$cmp = null;
			if($v !== 0) {
				$cmp = $v;
			} else {
				$cmp = haxe__Int32_Int32_Impl_::ucompare($divisor->low, $modulus->low);
			}
			{
				$x7 = new haxe__Int64____Int64($divisor->high << 1 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($divisor->low, 31), $divisor->low << 1 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits);
				$divisor = $x7;
				unset($x7);
			}
			{
				$x8 = new haxe__Int64____Int64($mask->high << 1 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($mask->low, 31), $mask->low << 1 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits);
				$mask = $x8;
				unset($x8);
			}
			if($cmp >= 0) {
				break;
			}
			unset($v,$cmp);
		}
		while(true) {
			$x9 = new haxe__Int64____Int64(0, 0);
			$b = $x9;
			$tmp4 = null;
			if(!($mask->high !== $b->high)) {
				$tmp4 = $mask->low !== $b->low;
			} else {
				$tmp4 = true;
			}
			if(!$tmp4) {
				break;
			}
			$v1 = haxe__Int32_Int32_Impl_::ucompare($modulus->high, $divisor->high);
			$tmp5 = null;
			if($v1 !== 0) {
				$tmp5 = $v1;
			} else {
				$tmp5 = haxe__Int32_Int32_Impl_::ucompare($modulus->low, $divisor->low);
			}
			if($tmp5 >= 0) {
				$x10 = new haxe__Int64____Int64($quotient->high | $mask->high, $quotient->low | $mask->low);
				$quotient = $x10;
				$high2 = $modulus->high - $divisor->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
				$low2 = $modulus->low - $divisor->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
				if(haxe__Int32_Int32_Impl_::ucompare($modulus->low, $divisor->low) < 0) {
					--$high2;
					$tmp6 = $high2 << haxe__Int32_Int32_Impl_::$extraBits;
					$high2 = $tmp6 >> haxe__Int32_Int32_Impl_::$extraBits;
					unset($tmp6);
				}
				$x11 = new haxe__Int64____Int64($high2, $low2);
				$modulus = $x11;
				unset($x11,$x10,$low2,$high2);
			}
			{
				$x12 = new haxe__Int64____Int64(_hx_shift_right($mask->high, 1), $mask->high << 31 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($mask->low, 1));
				$mask = $x12;
				unset($x12);
			}
			{
				$x13 = new haxe__Int64____Int64(_hx_shift_right($divisor->high, 1), $divisor->high << 31 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($divisor->low, 1));
				$divisor = $x13;
				unset($x13);
			}
			unset($x9,$v1,$tmp5,$tmp4,$b);
		}
		if($divSign) {
			$high3 = ~$quotient->high;
			$low3 = -$quotient->low;
			if($low3 === 0) {
				++$high3;
				$tmp7 = $high3 << haxe__Int32_Int32_Impl_::$extraBits;
				$high3 = $tmp7 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			$x14 = new haxe__Int64____Int64($high3, $low3);
			$quotient = $x14;
		}
		if($dividend->high < 0) {
			$high4 = ~$modulus->high;
			$low4 = -$modulus->low;
			if($low4 === 0) {
				++$high4;
				$tmp8 = $high4 << haxe__Int32_Int32_Impl_::$extraBits;
				$high4 = $tmp8 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			$x15 = new haxe__Int64____Int64($high4, $low4);
			$modulus = $x15;
		}
		{
			$tmp = _hx_anonymous(array("quotient" => $quotient, "modulus" => $modulus));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function neg($x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::neg");
		$__hx__spos = $GLOBALS['%s']->length;
		$high = ~$x->high;
		$low = -$x->low;
		if($low === 0) {
			++$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x1 = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function preIncrement($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::preIncrement");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($this1->high, $this1->low);
		$this1 = $x;
		{
			$x->low++;
			$tmp = $x->low << haxe__Int32_Int32_Impl_::$extraBits;
			$x->low = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$tmp1 = $x->low === 0;
		if($tmp1) {
			$x->high++;
			$tmp2 = $x->high << haxe__Int32_Int32_Impl_::$extraBits;
			$x->high = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function postIncrement($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::postIncrement");
		$__hx__spos = $GLOBALS['%s']->length;
		$ret = $this1;
		{
			$x = new haxe__Int64____Int64($this1->high, $this1->low);
			$this1 = $x;
			{
				$x->low++;
				$tmp = $x->low << haxe__Int32_Int32_Impl_::$extraBits;
				$x->low = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			$tmp1 = $x->low === 0;
			if($tmp1) {
				$x->high++;
				$tmp2 = $x->high << haxe__Int32_Int32_Impl_::$extraBits;
				$x->high = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function preDecrement($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::preDecrement");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($this1->high, $this1->low);
		$this1 = $x;
		$tmp = $x->low === 0;
		if($tmp) {
			$x->high--;
			$tmp1 = $x->high << haxe__Int32_Int32_Impl_::$extraBits;
			$x->high = $tmp1 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		{
			$x->low--;
			$tmp2 = $x->low << haxe__Int32_Int32_Impl_::$extraBits;
			$x->low = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		{
			$tmp2 = $x;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function postDecrement($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::postDecrement");
		$__hx__spos = $GLOBALS['%s']->length;
		$ret = $this1;
		{
			$x = new haxe__Int64____Int64($this1->high, $this1->low);
			$this1 = $x;
			$tmp = $x->low === 0;
			if($tmp) {
				$x->high--;
				$tmp1 = $x->high << haxe__Int32_Int32_Impl_::$extraBits;
				$x->high = $tmp1 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
			{
				$x->low--;
				$tmp2 = $x->low << haxe__Int32_Int32_Impl_::$extraBits;
				$x->low = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function add($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::add");
		$__hx__spos = $GLOBALS['%s']->length;
		$high = $a->high + $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $a->low + $b->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $a->low) < 0) {
			++$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function addInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::addInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$high = $a->high + $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $a->low + $b1->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $a->low) < 0) {
			++$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x1 = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function sub($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::sub");
		$__hx__spos = $GLOBALS['%s']->length;
		$high = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $a->low - $b->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low) < 0) {
			--$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function subInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::subInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$high = $a->high - $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $a->low - $b1->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($a->low, $b1->low) < 0) {
			--$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x1 = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function intSub($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intSub");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$a1 = $x;
		$high = $a1->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $a1->low - $b->low << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($a1->low, $b->low) < 0) {
			--$high;
			$tmp = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$x1 = new haxe__Int64____Int64($high, $low);
		{
			$tmp = $x1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function mul($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::mul");
		$__hx__spos = $GLOBALS['%s']->length;
		$al = $a->low & 65535;
		$ah = _hx_shift_right($a->low, 16);
		$bl = $b->low & 65535;
		$bh = _hx_shift_right($b->low, 16);
		$p00 = haxe__Int32_Int32_Impl_::mul($al, $bl);
		$p10 = haxe__Int32_Int32_Impl_::mul($ah, $bl);
		$p01 = haxe__Int32_Int32_Impl_::mul($al, $bh);
		$p11 = haxe__Int32_Int32_Impl_::mul($ah, $bh);
		$low = $p00;
		$high = ($p11 + (_hx_shift_right($p01, 16)) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits) + (_hx_shift_right($p10, 16)) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $p01 << 16 << haxe__Int32_Int32_Impl_::$extraBits;
		$p01 = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $p00 + $p01 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $p01) < 0) {
			++$high;
			$tmp1 = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp1 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$tmp2 = $p10 << 16 << haxe__Int32_Int32_Impl_::$extraBits;
		$p10 = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp3 = $low + $p10 << haxe__Int32_Int32_Impl_::$extraBits;
		$low = $tmp3 >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $p10) < 0) {
			++$high;
			$tmp4 = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp4 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$tmp5 = $high + (haxe__Int32_Int32_Impl_::mul($a->low, $b->high) + haxe__Int32_Int32_Impl_::mul($a->high, $b->low) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits) << haxe__Int32_Int32_Impl_::$extraBits;
		$high = $tmp5 >> haxe__Int32_Int32_Impl_::$extraBits;
		$x = new haxe__Int64____Int64($high, $low);
		{
			$tmp4 = $x;
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	static function mulInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::mulInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$al = $a->low & 65535;
		$ah = _hx_shift_right($a->low, 16);
		$bl = $b1->low & 65535;
		$bh = _hx_shift_right($b1->low, 16);
		$p00 = haxe__Int32_Int32_Impl_::mul($al, $bl);
		$p10 = haxe__Int32_Int32_Impl_::mul($ah, $bl);
		$p01 = haxe__Int32_Int32_Impl_::mul($al, $bh);
		$p11 = haxe__Int32_Int32_Impl_::mul($ah, $bh);
		$low = $p00;
		$high = ($p11 + (_hx_shift_right($p01, 16)) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits) + (_hx_shift_right($p10, 16)) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $p01 << 16 << haxe__Int32_Int32_Impl_::$extraBits;
		$p01 = $tmp >> haxe__Int32_Int32_Impl_::$extraBits;
		$low = $p00 + $p01 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $p01) < 0) {
			++$high;
			$tmp1 = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp1 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$tmp2 = $p10 << 16 << haxe__Int32_Int32_Impl_::$extraBits;
		$p10 = $tmp2 >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp3 = $low + $p10 << haxe__Int32_Int32_Impl_::$extraBits;
		$low = $tmp3 >> haxe__Int32_Int32_Impl_::$extraBits;
		if(haxe__Int32_Int32_Impl_::ucompare($low, $p10) < 0) {
			++$high;
			$tmp4 = $high << haxe__Int32_Int32_Impl_::$extraBits;
			$high = $tmp4 >> haxe__Int32_Int32_Impl_::$extraBits;
		}
		$tmp5 = $high + (haxe__Int32_Int32_Impl_::mul($a->low, $b1->high) + haxe__Int32_Int32_Impl_::mul($a->high, $b1->low) << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits) << haxe__Int32_Int32_Impl_::$extraBits;
		$high = $tmp5 >> haxe__Int32_Int32_Impl_::$extraBits;
		$x1 = new haxe__Int64____Int64($high, $low);
		{
			$tmp4 = $x1;
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	static function div($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::div");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe__Int64_Int64_Impl_::divMod($a, $b)->quotient;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function divInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::divInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		{
			$tmp = haxe__Int64_Int64_Impl_::divMod($a, $x)->quotient;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function intDiv($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intDiv");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$x1 = haxe__Int64_Int64_Impl_::divMod($x, $b)->quotient;
		if($x1->high !== $x1->low >> 31) {
			throw new HException("Overflow");
		}
		$x2 = $x1->low;
		$x3 = new haxe__Int64____Int64($x2 >> 31, $x2);
		{
			$tmp = $x3;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function mod($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::mod");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = haxe__Int64_Int64_Impl_::divMod($a, $b)->modulus;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function modInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::modInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$x1 = haxe__Int64_Int64_Impl_::divMod($a, $x)->modulus;
		if($x1->high !== $x1->low >> 31) {
			throw new HException("Overflow");
		}
		$x2 = $x1->low;
		$x3 = new haxe__Int64____Int64($x2 >> 31, $x2);
		{
			$tmp = $x3;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function intMod($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intMod");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$x1 = haxe__Int64_Int64_Impl_::divMod($x, $b)->modulus;
		if($x1->high !== $x1->low >> 31) {
			throw new HException("Overflow");
		}
		$x2 = $x1->low;
		$x3 = new haxe__Int64____Int64($x2 >> 31, $x2);
		{
			$tmp = $x3;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function eq($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::eq");
		$__hx__spos = $GLOBALS['%s']->length;
		if($a->high === $b->high) {
			$tmp = $a->low === $b->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static function eqInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::eqInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		if($a->high === $b1->high) {
			$tmp = $a->low === $b1->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static function neq($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::neq");
		$__hx__spos = $GLOBALS['%s']->length;
		if(!($a->high !== $b->high)) {
			$tmp = $a->low !== $b->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	static function neqInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::neqInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		if(!($a->high !== $b1->high)) {
			$tmp = $a->low !== $b1->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	static function lt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::lt");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 < 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function ltInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::ltInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$v = $a->high - $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b1->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b1->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b1->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 < 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function intLt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intLt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$a1 = $x;
		$v = $a1->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a1->low, $b->low);
		}
		$tmp1 = null;
		if($a1->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 < 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function lte($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::lte");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 <= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function lteInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::lteInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$v = $a->high - $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b1->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b1->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b1->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 <= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function intLte($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intLte");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$a1 = $x;
		$v = $a1->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a1->low, $b->low);
		}
		$tmp1 = null;
		if($a1->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 <= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function gt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::gt");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 > 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function gtInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::gtInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$v = $a->high - $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b1->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b1->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b1->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 > 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function intGt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intGt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$a1 = $x;
		$v = $a1->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a1->low, $b->low);
		}
		$tmp1 = null;
		if($a1->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 > 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function gte($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::gte");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = $a->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 >= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function gteInt($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::gteInt");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($b >> 31, $b);
		$b1 = $x;
		$v = $a->high - $b1->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a->low, $b1->low);
		}
		$tmp1 = null;
		if($a->high < 0) {
			if($b1->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b1->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 >= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function intGte($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::intGte");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a >> 31, $a);
		$a1 = $x;
		$v = $a1->high - $b->high << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits;
		$tmp = $v !== 0;
		if($tmp) {
			$v = $v;
		} else {
			$v = haxe__Int32_Int32_Impl_::ucompare($a1->low, $b->low);
		}
		$tmp1 = null;
		if($a1->high < 0) {
			if($b->high < 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = -1;
			}
		} else {
			if($b->high >= 0) {
				$tmp1 = $v;
			} else {
				$tmp1 = 1;
			}
		}
		{
			$tmp2 = $tmp1 >= 0;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function complement($a) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::complement");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64(~$a->high, ~$a->low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function hand($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::and");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a->high & $b->high, $a->low & $b->low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function hor($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::or");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a->high | $b->high, $a->low | $b->low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function hxor($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::xor");
		$__hx__spos = $GLOBALS['%s']->length;
		$x = new haxe__Int64____Int64($a->high ^ $b->high, $a->low ^ $b->low);
		{
			$tmp = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function shl($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::shl");
		$__hx__spos = $GLOBALS['%s']->length;
		$b &= 63;
		if($b === 0) {
			$x = new haxe__Int64____Int64($a->high, $a->low);
			{
				$tmp = $x;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		} else {
			if($b < 32) {
				$x1 = new haxe__Int64____Int64($a->high << $b << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($a->low, 32 - $b), $a->low << $b << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits);
				{
					$tmp = $x1;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				$x2 = new haxe__Int64____Int64($a->low << $b - 32 << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits, 0);
				{
					$tmp = $x2;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function shr($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::shr");
		$__hx__spos = $GLOBALS['%s']->length;
		$b &= 63;
		if($b === 0) {
			$x = new haxe__Int64____Int64($a->high, $a->low);
			{
				$tmp = $x;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		} else {
			if($b < 32) {
				$x1 = new haxe__Int64____Int64($a->high >> $b, $a->high << 32 - $b << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($a->low, $b));
				{
					$tmp = $x1;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				$x2 = new haxe__Int64____Int64($a->high >> 31, $a->high >> $b - 32);
				{
					$tmp = $x2;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function ushr($a, $b) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::ushr");
		$__hx__spos = $GLOBALS['%s']->length;
		$b &= 63;
		if($b === 0) {
			$x = new haxe__Int64____Int64($a->high, $a->low);
			{
				$tmp = $x;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		} else {
			if($b < 32) {
				$x1 = new haxe__Int64____Int64(_hx_shift_right($a->high, $b), $a->high << 32 - $b << haxe__Int32_Int32_Impl_::$extraBits >> haxe__Int32_Int32_Impl_::$extraBits | _hx_shift_right($a->low, $b));
				{
					$tmp = $x1;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				$x2 = new haxe__Int64____Int64(0, _hx_shift_right($a->high, $b - 32));
				{
					$tmp = $x2;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function get_high($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::get_high");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->high;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function set_high($this1, $x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::set_high");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->high = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function get_low($this1) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::get_low");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->low;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function set_low($this1, $x) {
		$GLOBALS['%s']->push("haxe._Int64.Int64_Impl_::set_low");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->low = $x;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_low" => "get_low","get_high" => "get_high");
	function __toString() { return 'haxe._Int64.Int64_Impl_'; }
}
