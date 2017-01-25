<?php

// Generated by Haxe 3.3.0
class ufront_core__MultiValueMap_MultiValueMap_Impl_ {
	public function __construct(){}
	static function _new() {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1 = new haxe_ds_StringMap();
		{
			$tmp = $this1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function keys($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::keys");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->keys();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function exists($this1, $name) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->exists($name);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function iterator($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::iterator");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core__MultiValueMap_MultiValueMap_Impl_::allValues($this1)->iterator();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function allValues($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::allValues");
		$__hx__spos = $GLOBALS['%s']->length;
		$_g = (new _hx_array(array()));
		{
			$tmp = $this1->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$arr = $tmp->next();
				$_g1 = 0;
				while($_g1 < $arr->length) {
					$v = $arr[$_g1];
					++$_g1;
					$_g->push($v);
					unset($v);
				}
				unset($tmp1,$arr,$_g1);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $_g;
		}
		$GLOBALS['%s']->pop();
	}
	static function get($this1, $name) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::get");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this1->exists($name);
		if($tmp) {
			$arr = $this1->get($name);
			{
				$tmp2 = $arr[$arr->length - 1];
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function getAll($this1, $name) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::getAll");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this1->exists($name);
		if($tmp) {
			$tmp2 = $this1->get($name);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$tmp2 = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function set($this1, $name, $value) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::set");
		$__hx__spos = $GLOBALS['%s']->length;
		if($value !== null) {
			$tmp = StringTools::endsWith($name, "[]");
			if($tmp) {
				$tmp1 = strlen($name) - 2;
				$name = _hx_substr($name, 0, $tmp1);
			} else {
				$name = $name;
			}
			$this1->set($name, (new _hx_array(array($value))));
		}
		$GLOBALS['%s']->pop();
	}
	static function add($this1, $name, $value) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::add");
		$__hx__spos = $GLOBALS['%s']->length;
		if($value !== null) {
			if($name !== null) {
				$tmp = StringTools::endsWith($name, "[]");
				if($tmp) {
					$tmp1 = strlen($name) - 2;
					$name = _hx_substr($name, 0, $tmp1);
				} else {
					$name = $name;
				}
			} else {
				$name = "";
			}
			$tmp2 = $this1->exists($name);
			if($tmp2) {
				$this1->get($name)->push($value);
			} else {
				$this1->set($name, (new _hx_array(array($value))));
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function remove($this1, $key) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1->remove($key);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function hclone($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::clone");
		$__hx__spos = $GLOBALS['%s']->length;
		$this2 = new haxe_ds_StringMap();
		$newMap = $this2;
		{
			$tmp = $this1->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$k = $tmp->next();
				$_g = 0;
				$_g1 = $this1->get($k);
				while($_g < $_g1->length) {
					$v = $_g1[$_g];
					++$_g;
					ufront_core__MultiValueMap_MultiValueMap_Impl_::add($newMap, $k, $v);
					unset($v);
				}
				unset($tmp1,$k,$_g1,$_g);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $newMap;
		}
		$GLOBALS['%s']->pop();
	}
	static function toString($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$sb = new StringBuf();
		$sb->add("[");
		{
			$tmp = $this1->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$key = $tmp->next();
				$sb->add("\x0A\x09" . _hx_string_or_null($key) . " = [");
				$tmp2 = ufront_core__MultiValueMap_MultiValueMap_Impl_::getAll($this1, $key)->join(", ");
				$sb->add($tmp2);
				$sb->add("]");
				unset($tmp2,$tmp1,$key);
			}
		}
		$tmp3 = strlen($sb->b) > 1;
		if($tmp3) {
			$sb->add("\x0A");
		}
		$sb->add("]");
		{
			$tmp = $sb->b;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function stripArrayFromName($this1, $name) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::stripArrayFromName");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = StringTools::endsWith($name, "[]");
		if($tmp) {
			$tmp1 = strlen($name) - 2;
			{
				$tmp2 = _hx_substr($name, 0, $tmp1);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$GLOBALS['%s']->pop();
			return $name;
		}
		$GLOBALS['%s']->pop();
	}
	static function toMapOfArrays($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::toMapOfArrays");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this1;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromMapOfArrays($map) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::fromMapOfArrays");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $map;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function toStringMap($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::toStringMap");
		$__hx__spos = $GLOBALS['%s']->length;
		$sm = new haxe_ds_StringMap();
		{
			$tmp = $this1->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$key = $tmp->next();
				$tmp2 = ufront_core__MultiValueMap_MultiValueMap_Impl_::get($this1, $key);
				$sm->set($key, $tmp2);
				unset($tmp2,$tmp1,$key);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $sm;
		}
		$GLOBALS['%s']->pop();
	}
	static function toMap($this1) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::toMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core__MultiValueMap_MultiValueMap_Impl_::toStringMap($this1);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromStringMap($stringMap) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::fromStringMap");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1 = new haxe_ds_StringMap();
		$qm = $this1;
		if($stringMap !== null) {
			$tmp = $stringMap->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$key = $tmp->next();
				$tmp2 = $stringMap->get($key);
				ufront_core__MultiValueMap_MultiValueMap_Impl_::set($qm, $key, $tmp2);
				unset($tmp2,$tmp1,$key);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $qm;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromMap($map) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::fromMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core__MultiValueMap_MultiValueMap_Impl_::fromStringMap($map);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function combine($maps) {
		$GLOBALS['%s']->push("ufront.core._MultiValueMap.MultiValueMap_Impl_::combine");
		$__hx__spos = $GLOBALS['%s']->length;
		$this1 = new haxe_ds_StringMap();
		$qm = $this1;
		{
			$_g = 0;
			while($_g < $maps->length) {
				$map = $maps[$_g];
				++$_g;
				{
					$tmp = $map->keys();
					while(true) {
						$tmp1 = !$tmp->hasNext();
						if($tmp1) {
							break;
						}
						$key = $tmp->next();
						$_g1 = 0;
						$_g2 = ufront_core__MultiValueMap_MultiValueMap_Impl_::getAll($map, $key);
						while($_g1 < $_g2->length) {
							$val = $_g2[$_g1];
							++$_g1;
							ufront_core__MultiValueMap_MultiValueMap_Impl_::add($qm, $key, $val);
							unset($val);
						}
						unset($tmp1,$key,$_g2,$_g1);
					}
					unset($tmp);
				}
				unset($map);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $qm;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.core._MultiValueMap.MultiValueMap_Impl_'; }
}