<?php

// Generated by Haxe 3.3.0
class haxe_rtti_Meta {
	public function __construct(){}
	static function getType($t) {
		$GLOBALS['%s']->push("haxe.rtti.Meta::getType");
		$__hx__spos = $GLOBALS['%s']->length;
		$meta = haxe_rtti_Meta::getMeta($t);
		$tmp = null;
		if($meta !== null) {
			$tmp = _hx_field($meta, "obj") === null;
		} else {
			$tmp = true;
		}
		if($tmp) {
			$tmp2 = _hx_anonymous(array());
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$tmp2 = $meta->obj;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function isInterface($t) {
		$GLOBALS['%s']->push("haxe.rtti.Meta::isInterface");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $t instanceof _hx_interface;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getMeta($t) {
		$GLOBALS['%s']->push("haxe.rtti.Meta::getMeta");
		$__hx__spos = $GLOBALS['%s']->length;
		$ret = Reflect::field($t, "__meta__");
		$tmp = null;
		if($ret === null) {
			$tmp = Std::is($t, _hx_qtype("Class"));
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp1 = haxe_rtti_Meta::isInterface($t);
			if($tmp1) {
				$cls = Type::resolveClass(_hx_string_or_null(Type::getClassName($t)) . "_HxMeta");
				if($cls !== null) {
					$tmp2 = Reflect::field($cls, "__meta__");
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $ret;
		}
		$GLOBALS['%s']->pop();
	}
	static function getStatics($t) {
		$GLOBALS['%s']->push("haxe.rtti.Meta::getStatics");
		$__hx__spos = $GLOBALS['%s']->length;
		$meta = haxe_rtti_Meta::getMeta($t);
		$tmp = null;
		if($meta !== null) {
			$tmp = _hx_field($meta, "statics") === null;
		} else {
			$tmp = true;
		}
		if($tmp) {
			$tmp2 = _hx_anonymous(array());
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$tmp2 = $meta->statics;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getFields($t) {
		$GLOBALS['%s']->push("haxe.rtti.Meta::getFields");
		$__hx__spos = $GLOBALS['%s']->length;
		$meta = haxe_rtti_Meta::getMeta($t);
		$tmp = null;
		if($meta !== null) {
			$tmp = _hx_field($meta, "fields") === null;
		} else {
			$tmp = true;
		}
		if($tmp) {
			$tmp2 = _hx_anonymous(array());
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$tmp2 = $meta->fields;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'haxe.rtti.Meta'; }
}
