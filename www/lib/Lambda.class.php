<?php

// Generated by Haxe 3.3.0
class Lambda {
	public function __construct(){}
	static function harray($it) {
		$GLOBALS['%s']->push("Lambda::array");
		$__hx__spos = $GLOBALS['%s']->length;
		$a = new _hx_array(array());
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$i = $tmp->next();
				$a->push($i);
				unset($tmp1,$i);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $a;
		}
		$GLOBALS['%s']->pop();
	}
	static function hlist($it) {
		$GLOBALS['%s']->push("Lambda::list");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$i = $tmp->next();
				$l->add($i);
				unset($tmp1,$i);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	static function map($it, $f) {
		$GLOBALS['%s']->push("Lambda::map");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$tmp2 = call_user_func_array($f, array($x));
				$l->add($tmp2);
				unset($x,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	static function mapi($it, $f) {
		$GLOBALS['%s']->push("Lambda::mapi");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		$i = 0;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$tmp2 = $i++;
				$tmp3 = call_user_func_array($f, array($tmp2, $x));
				$l->add($tmp3);
				unset($x,$tmp3,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	static function flatten($it) {
		$GLOBALS['%s']->push("Lambda::flatten");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$e = $tmp->next();
				{
					$tmp2 = $e->iterator();
					while(true) {
						$tmp3 = !$tmp2->hasNext();
						if($tmp3) {
							break;
						}
						$x = $tmp2->next();
						$l->add($x);
						unset($x,$tmp3);
					}
					unset($tmp2);
				}
				unset($tmp1,$e);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	static function flatMap($it, $f) {
		$GLOBALS['%s']->push("Lambda::flatMap");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Lambda::map($it, $f);
		{
			$tmp2 = Lambda::flatten($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function has($it, $elt) {
		$GLOBALS['%s']->push("Lambda::has");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				if((is_object($_t = $x) && ($_t instanceof Enum) ? $_t == $elt : _hx_equal($_t, $elt))) {
					$GLOBALS['%s']->pop();
					return true;
				}
				unset($x,$tmp1,$_t);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static function exists($it, $f) {
		$GLOBALS['%s']->push("Lambda::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$tmp2 = call_user_func_array($f, array($x));
				if($tmp2) {
					$GLOBALS['%s']->pop();
					return true;
				}
				unset($x,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static function hforeach($it, $f) {
		$GLOBALS['%s']->push("Lambda::foreach");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$tmp2 = !call_user_func_array($f, array($x));
				if($tmp2) {
					$GLOBALS['%s']->pop();
					return false;
				}
				unset($x,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	static function iter($it, $f) {
		$GLOBALS['%s']->push("Lambda::iter");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $it->iterator();
		while(true) {
			$tmp1 = !$tmp->hasNext();
			if($tmp1) {
				break;
			}
			$x = $tmp->next();
			call_user_func_array($f, array($x));
			unset($x,$tmp1);
		}
		$GLOBALS['%s']->pop();
	}
	static function filter($it, $f) {
		$GLOBALS['%s']->push("Lambda::filter");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$tmp2 = call_user_func_array($f, array($x));
				if($tmp2) {
					$l->add($x);
				}
				unset($x,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	static function fold($it, $f, $first) {
		$GLOBALS['%s']->push("Lambda::fold");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$first = call_user_func_array($f, array($x, $first));
				unset($x,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $first;
		}
		$GLOBALS['%s']->pop();
	}
	static function count($it, $pred = null) {
		$GLOBALS['%s']->push("Lambda::count");
		$__hx__spos = $GLOBALS['%s']->length;
		$n = 0;
		if($pred === null) {
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$tmp->next();
				++$n;
				unset($tmp1);
			}
		} else {
			$tmp2 = $it->iterator();
			while(true) {
				$tmp3 = !$tmp2->hasNext();
				if($tmp3) {
					break;
				}
				$x = $tmp2->next();
				$tmp4 = call_user_func_array($pred, array($x));
				if($tmp4) {
					++$n;
				}
				unset($x,$tmp4,$tmp3);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $n;
		}
		$GLOBALS['%s']->pop();
	}
	static function hempty($it) {
		$GLOBALS['%s']->push("Lambda::empty");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = !$it->iterator()->hasNext();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function indexOf($it, $v) {
		$GLOBALS['%s']->push("Lambda::indexOf");
		$__hx__spos = $GLOBALS['%s']->length;
		$i = 0;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$v2 = $tmp->next();
				if((is_object($_t = $v) && ($_t instanceof Enum) ? $_t == $v2 : _hx_equal($_t, $v2))) {
					$GLOBALS['%s']->pop();
					return $i;
				}
				++$i;
				unset($v2,$tmp1,$_t);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return -1;
		}
		$GLOBALS['%s']->pop();
	}
	static function find($it, $f) {
		$GLOBALS['%s']->push("Lambda::find");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $it->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$v = $tmp->next();
				$tmp2 = call_user_func_array($f, array($v));
				if($tmp2) {
					$GLOBALS['%s']->pop();
					return $v;
				}
				unset($v,$tmp2,$tmp1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function concat($a, $b) {
		$GLOBALS['%s']->push("Lambda::concat");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		{
			$tmp = $a->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$x = $tmp->next();
				$l->add($x);
				unset($x,$tmp1);
			}
		}
		{
			$tmp2 = $b->iterator();
			while(true) {
				$tmp3 = !$tmp2->hasNext();
				if($tmp3) {
					break;
				}
				$x1 = $tmp2->next();
				$l->add($x1);
				unset($x1,$tmp3);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $l;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'Lambda'; }
}
