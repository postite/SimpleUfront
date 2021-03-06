<?php

// Generated by Haxe 3.3.0
class Type {
	public function __construct(){}
	static function getClass($o) {
		$GLOBALS['%s']->push("Type::getClass");
		$__hx__spos = $GLOBALS['%s']->length;
		if($o === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$tmp = is_array($o);
		if($tmp) {
			$tmp1 = null;
			$tmp2 = count($o);
			if($tmp2 === 2) {
				$tmp1 = is_callable($o);
			} else {
				$tmp1 = false;
			}
			if($tmp1) {
				$GLOBALS['%s']->pop();
				return null;
			}
			{
				$tmp3 = _hx_ttype("Array");
				$GLOBALS['%s']->pop();
				return $tmp3;
			}
		}
		$tmp3 = is_string($o);
		if($tmp3) {
			$tmp4 = _hx_is_lambda($o);
			if($tmp4) {
				$GLOBALS['%s']->pop();
				return null;
			}
			{
				$tmp2 = _hx_ttype("String");
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp5 = !is_object($o);
		if($tmp5) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$c = get_class($o);
		$tmp6 = null;
		$tmp7 = null;
		if($c !== false) {
			$tmp7 = $c === "_hx_anonymous";
		} else {
			$tmp7 = true;
		}
		if(!$tmp7) {
			$tmp6 = is_subclass_of($c, "enum");
		} else {
			$tmp6 = true;
		}
		if($tmp6) {
			$GLOBALS['%s']->pop();
			return null;
		} else {
			$tmp2 = _hx_ttype($c);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getEnum($o) {
		$GLOBALS['%s']->push("Type::getEnum");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$o instanceof Enum;
		if($tmp) {
			$GLOBALS['%s']->pop();
			return null;
		} else {
			$tmp2 = _hx_ttype(get_class($o));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getSuperClass($c) {
		$GLOBALS['%s']->push("Type::getSuperClass");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = get_parent_class($c->__tname__);
		if($s === false) {
			$GLOBALS['%s']->pop();
			return null;
		} else {
			$tmp = _hx_ttype($s);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getClassName($c) {
		$GLOBALS['%s']->push("Type::getClassName");
		$__hx__spos = $GLOBALS['%s']->length;
		if($c === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		{
			$tmp = $c->__qname__;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getEnumName($e) {
		$GLOBALS['%s']->push("Type::getEnumName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $e->__qname__;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function resolveClass($name) {
		$GLOBALS['%s']->push("Type::resolveClass");
		$__hx__spos = $GLOBALS['%s']->length;
		$c = _hx_qtype($name);
		$tmp = $c instanceof _hx_class || $c instanceof _hx_interface;
		if($tmp) {
			$GLOBALS['%s']->pop();
			return $c;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function resolveEnum($name) {
		$GLOBALS['%s']->push("Type::resolveEnum");
		$__hx__spos = $GLOBALS['%s']->length;
		$e = _hx_qtype($name);
		$tmp = $e instanceof _hx_enum;
		if($tmp) {
			$GLOBALS['%s']->pop();
			return $e;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function createInstance($cl, $args) {
		$GLOBALS['%s']->push("Type::createInstance");
		$__hx__spos = $GLOBALS['%s']->length;
		if($cl->__qname__ === "Array") {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($cl->__qname__ === "String") {
			$tmp = $args[0];
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$c = $cl->__rfl__();
		if($c === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		{
			$tmp = $inst = $c->getConstructor() ? $c->newInstanceArgs($args->a) : $c->newInstanceArgs();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function createEmptyInstance($cl) {
		$GLOBALS['%s']->push("Type::createEmptyInstance");
		$__hx__spos = $GLOBALS['%s']->length;
		if($cl->__qname__ === "Array") {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($cl->__qname__ === "String") {
			$GLOBALS['%s']->pop();
			return "";
		}
		try {
			php_Boot::$skip_constructor = true;
			$rfl = $cl->__rfl__();
			if($rfl === null) {
				$GLOBALS['%s']->pop();
				return null;
			}
			$m = $rfl->getConstructor();
			$nargs = $m->getNumberOfRequiredParameters();
			$i = null;
			if($nargs > 0) {
				$args = array_fill(0, $m->getNumberOfRequiredParameters(), null);
				$i = $rfl->newInstanceArgs($args);
			} else {
				$i = $rfl->newInstanceArgs(array());
			}
			php_Boot::$skip_constructor = false;
			{
				$GLOBALS['%s']->pop();
				return $i;
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				php_Boot::$skip_constructor = false;
				$tmp = Std::string($cl);
				throw new HException("Unable to instantiate " . _hx_string_or_null($tmp));
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function createEnum($e, $constr, $params = null) {
		$GLOBALS['%s']->push("Type::createEnum");
		$__hx__spos = $GLOBALS['%s']->length;
		$f = Reflect::field($e, $constr);
		if($f === null) {
			throw new HException("No such constructor " . _hx_string_or_null($constr));
		}
		$tmp = Reflect::isFunction($f);
		if($tmp) {
			if($params === null) {
				throw new HException("Constructor " . _hx_string_or_null($constr) . " need parameters");
			}
			{
				$tmp2 = Reflect::callMethod($e, $f, $params);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp1 = null;
		if($params !== null) {
			$tmp1 = $params->length !== 0;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			throw new HException("Constructor " . _hx_string_or_null($constr) . " does not need parameters");
		}
		{
			$GLOBALS['%s']->pop();
			return $f;
		}
		$GLOBALS['%s']->pop();
	}
	static function createEnumIndex($e, $index, $params = null) {
		$GLOBALS['%s']->push("Type::createEnumIndex");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Type::getEnumConstructs($e);
		$c = $tmp[$index];
		if($c === null) {
			throw new HException(_hx_string_rec($index, "") . " is not a valid enum constructor index");
		}
		{
			$tmp2 = Type::createEnum($e, $c, $params);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getInstanceFields($c) {
		$GLOBALS['%s']->push("Type::getInstanceFields");
		$__hx__spos = $GLOBALS['%s']->length;
		if($c->__qname__ === "String") {
			$tmp = (new _hx_array(array("substr", "charAt", "charCodeAt", "indexOf", "lastIndexOf", "split", "toLowerCase", "toUpperCase", "toString", "length")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($c->__qname__ === "Array") {
			$tmp = (new _hx_array(array("push", "concat", "join", "pop", "reverse", "shift", "slice", "sort", "splice", "toString", "copy", "unshift", "insert", "remove", "iterator", "length")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		
		$rfl = $c->__rfl__();
		if($rfl === null) return new _hx_array(array());
		$r = array();
		$internals = array('__construct', '__call', '__get', '__set', '__isset', '__unset', '__toString');
		$ms = $rfl->getMethods();
		while(list(, $m) = each($ms)) {
			$n = $m->getName();
			if(!$m->isStatic() && !in_array($n, $internals)) $r[] = $n;
		}
		$ps = $rfl->getProperties();
		while(list(, $p) = each($ps))
			if(!$p->isStatic() && ($name = $p->getName()) !== '__dynamics') $r[] = $name;
		;
		{
			$tmp = new _hx_array(array_values(array_unique($r)));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getClassFields($c) {
		$GLOBALS['%s']->push("Type::getClassFields");
		$__hx__spos = $GLOBALS['%s']->length;
		if($c->__qname__ === "String") {
			$tmp = (new _hx_array(array("fromCharCode")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		if($c->__qname__ === "Array") {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		
		$rfl = $c->__rfl__();
		if($rfl === null) return new _hx_array(array());
		$ms = $rfl->getMethods(ReflectionMethod::IS_STATIC);
		$r = array();
		while(list(, $m) = each($ms)) {
			$cls = $m->getDeclaringClass();
			if($cls->getName() == $c->__tname__) $r[] = $m->getName();
		}
		$ps = $rfl->getProperties(ReflectionMethod::IS_STATIC);
		while(list(, $p) = each($ps)) {
			$cls = $p->getDeclaringClass();
			if($cls->getName() == $c->__tname__ && ($name = $p->getName()) !== '__properties__') $r[] = $name;
		}
		;
		{
			$tmp = new _hx_array(array_values(array_unique($r)));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getEnumConstructs($e) {
		$GLOBALS['%s']->push("Type::getEnumConstructs");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $e->__tname__ == 'Bool';
		if($tmp) {
			$tmp2 = (new _hx_array(array("true", "false")));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$tmp1 = $e->__tname__ == 'Void';
		if($tmp1) {
			$tmp2 = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		{
			$tmp2 = new _hx_array($e->__constructors);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function typeof($v) {
		$GLOBALS['%s']->push("Type::typeof");
		$__hx__spos = $GLOBALS['%s']->length;
		if($v === null) {
			$tmp = ValueType::$TNull;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$tmp = is_array($v);
		if($tmp) {
			$tmp1 = is_callable($v);
			if($tmp1) {
				$tmp2 = ValueType::$TFunction;
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
			{
				$tmp2 = ValueType::TClass(_hx_qtype("Array"));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp2 = is_string($v);
		if($tmp2) {
			$tmp3 = _hx_is_lambda($v);
			if($tmp3) {
				$tmp4 = ValueType::$TFunction;
				$GLOBALS['%s']->pop();
				return $tmp4;
			}
			{
				$tmp4 = ValueType::TClass(_hx_qtype("String"));
				$GLOBALS['%s']->pop();
				return $tmp4;
			}
		}
		$tmp4 = is_bool($v);
		if($tmp4) {
			$tmp3 = ValueType::$TBool;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp5 = is_int($v);
		if($tmp5) {
			$tmp3 = ValueType::$TInt;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp6 = is_float($v);
		if($tmp6) {
			$tmp3 = ValueType::$TFloat;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp7 = $v instanceof _hx_anonymous;
		if($tmp7) {
			$tmp3 = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp8 = $v instanceof _hx_enum;
		if($tmp8) {
			$tmp3 = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp9 = $v instanceof _hx_class;
		if($tmp9) {
			$tmp3 = ValueType::$TObject;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$c = _hx_ttype(get_class($v));
		$tmp10 = $c instanceof _hx_enum;
		if($tmp10) {
			$tmp3 = ValueType::TEnum($c);
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$tmp11 = $c instanceof _hx_class;
		if($tmp11) {
			$tmp3 = ValueType::TClass($c);
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		{
			$tmp3 = ValueType::$TUnknown;
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$GLOBALS['%s']->pop();
	}
	static function enumEq($a, $b) {
		$GLOBALS['%s']->push("Type::enumEq");
		$__hx__spos = $GLOBALS['%s']->length;
		if((is_object($_t = $a) && ($_t instanceof Enum) ? $_t == $b : _hx_equal($_t, $b))) {
			$GLOBALS['%s']->pop();
			return true;
		}
		try {
			if(!_hx_equal($a->index, $b->index)) {
				$GLOBALS['%s']->pop();
				return false;
			}
			{
				$_g1 = 0;
				$_g = count($a->params);
				while($_g1 < $_g) {
					$i = $_g1++;
					$tmp = $a->params[$i];
					$tmp1 = Type::getEnum($tmp);
					if($tmp1 !== null) {
						$tmp2 = $a->params[$i];
						$tmp3 = $b->params[$i];
						$tmp4 = !Type::enumEq($tmp2, $tmp3);
						if($tmp4) {
							$GLOBALS['%s']->pop();
							return false;
						}
						unset($tmp4,$tmp3,$tmp2);
					} else {
						$tmp5 = !_hx_equal($a->params[$i], $b->params[$i]);
						if($tmp5) {
							$GLOBALS['%s']->pop();
							return false;
						}
						unset($tmp5);
					}
					unset($tmp1,$tmp,$i);
				}
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				{
					$GLOBALS['%s']->pop();
					return false;
				}
			}
		}
		{
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	static function enumConstructor($e) {
		$GLOBALS['%s']->push("Type::enumConstructor");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $e->tag;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function enumParameters($e) {
		$GLOBALS['%s']->push("Type::enumParameters");
		$__hx__spos = $GLOBALS['%s']->length;
		if(_hx_field($e, "params") === null) {
			$tmp = (new _hx_array(array()));
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$tmp = new _hx_array($e->params);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function enumIndex($e) {
		$GLOBALS['%s']->push("Type::enumIndex");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $e->index;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function allEnums($e) {
		$GLOBALS['%s']->push("Type::allEnums");
		$__hx__spos = $GLOBALS['%s']->length;
		$all = (new _hx_array(array()));
		{
			$_g = 0;
			$_g1 = Type::getEnumConstructs($e);
			while($_g < $_g1->length) {
				$c = $_g1[$_g];
				++$_g;
				$v = Reflect::field($e, $c);
				$tmp = !Reflect::isFunction($v);
				if($tmp) {
					$all->push($v);
				}
				unset($v,$tmp,$c);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $all;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'Type'; }
}
