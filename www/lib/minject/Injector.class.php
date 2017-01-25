<?php

// Generated by Haxe 3.3.0
class minject_Injector {
	public function __construct($parent = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("minject.Injector::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->infos = new haxe_ds_StringMap();
		$this->mappings = new haxe_ds_StringMap();
		$this->parent = $parent;
		$GLOBALS['%s']->pop();
	}}
	public $parent;
	public $mappings;
	public $infos;
	public function mapRuntimeTypeOf($value, $name = null) {
		$GLOBALS['%s']->push("minject.Injector::mapRuntimeTypeOf");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = minject_Injector::getValueType($value);
		{
			$tmp2 = $this->mapType($tmp, $name, null);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function mapType($type, $name = null, $value = null) {
		$GLOBALS['%s']->push("minject.Injector::mapType");
		$__hx__spos = $GLOBALS['%s']->length;
		$key = $this->getMappingKey($type, $name);
		$tmp = $this->mappings->exists($key);
		if($tmp) {
			$tmp2 = $this->mappings->get($key);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$mapping = new minject_InjectorMapping($type, $name);
		$this->mappings->set($key, $mapping);
		{
			$tmp2 = $mapping;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function unmapType($type, $name = null) {
		$GLOBALS['%s']->push("minject.Injector::unmapType");
		$__hx__spos = $GLOBALS['%s']->length;
		$key = $this->getMappingKey($type, $name);
		$tmp = $this->mappings->exists($key);
		if(!$tmp) {
			throw new HException("Error while removing an mapping: No mapping defined for type \"" . _hx_string_or_null($type) . "\", name \"" . _hx_string_or_null($name) . "\"");
		}
		{
			$key1 = $this->getMappingKey($type, $name);
			$this->mappings->remove($key1);
		}
		$GLOBALS['%s']->pop();
	}
	public function hasMappingForType($type, $name = null) {
		$GLOBALS['%s']->push("minject.Injector::hasMappingForType");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->findMappingForType($type, $name);
		{
			$tmp2 = $tmp !== null;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function findMappingForType($type, $name) {
		$GLOBALS['%s']->push("minject.Injector::findMappingForType");
		$__hx__spos = $GLOBALS['%s']->length;
		$key = $this->getMappingKey($type, $name);
		$mapping = $this->mappings->get($key);
		$tmp = null;
		if($mapping !== null) {
			$tmp = $mapping->provider !== null;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$GLOBALS['%s']->pop();
			return $mapping;
		}
		if($this->parent !== null) {
			$tmp2 = $this->parent->findMappingForType($type, $name);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function getValueForType($type, $name = null) {
		$GLOBALS['%s']->push("minject.Injector::getValueForType");
		$__hx__spos = $GLOBALS['%s']->length;
		$mapping = $this->findMappingForType($type, $name);
		if($mapping !== null) {
			$tmp = $mapping->getValue($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$index = _hx_index_of($type, "<", null);
		if($index > -1) {
			$tmp = _hx_substr($type, 0, $index);
			$mapping = $this->findMappingForType($tmp, $name);
		}
		if($mapping !== null) {
			$tmp = $mapping->getValue($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function injectInto($target) {
		$GLOBALS['%s']->push("minject.Injector::injectInto");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Type::getClass($target);
		$info = $this->getInfo($tmp);
		if($info === null) {
			$GLOBALS['%s']->pop();
			return;
		}
		{
			$_g = 0;
			$_g1 = $info->fields;
			while($_g < $_g1->length) {
				$field = $_g1[$_g];
				++$_g;
				$field->applyInjection($target, $this);
				unset($field);
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function _construct($type) {
		$GLOBALS['%s']->push("minject.Injector::_construct");
		$__hx__spos = $GLOBALS['%s']->length;
		$info = $this->getInfo($type);
		{
			$tmp = $info->ctor->createInstance($type, $this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function _instantiate($type) {
		$GLOBALS['%s']->push("minject.Injector::_instantiate");
		$__hx__spos = $GLOBALS['%s']->length;
		$instance = $this->_construct($type);
		$this->injectInto($instance);
		{
			$GLOBALS['%s']->pop();
			return $instance;
		}
		$GLOBALS['%s']->pop();
	}
	public function getInstance($type, $name = null) {
		$GLOBALS['%s']->push("minject.Injector::getInstance");
		$__hx__spos = $GLOBALS['%s']->length;
		$type1 = Type::getClassName($type);
		$mapping = $this->findMappingForType($type1, $name);
		if($mapping === null) {
			throw new HException("Error while getting mapping response: No mapping defined for class \"" . _hx_string_or_null($type1) . "\" " . _hx_string_or_null(("name \"" . _hx_string_or_null($name) . "\"")));
		}
		{
			$tmp = $mapping->getValue($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function createChildInjector() {
		$GLOBALS['%s']->push("minject.Injector::createChildInjector");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = new minject_Injector($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getInfo($forClass) {
		$GLOBALS['%s']->push("minject.Injector::getInfo");
		$__hx__spos = $GLOBALS['%s']->length;
		$type = Type::getClassName($forClass);
		$tmp = $this->infos->exists($type);
		if($tmp) {
			$tmp2 = $this->infos->get($type);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$info = $this->createInfo($forClass);
		$this->infos->set($type, $info);
		{
			$GLOBALS['%s']->pop();
			return $info;
		}
		$GLOBALS['%s']->pop();
	}
	public function createInfo($forClass) {
		$GLOBALS['%s']->push("minject.Injector::createInfo");
		$__hx__spos = $GLOBALS['%s']->length;
		$info = new minject_InjectorInfo(null, (new _hx_array(array())));
		$this->addClassToInfo($forClass, $info, (new _hx_array(array())));
		haxe_ds_ArraySort::sort($info->fields, array(new _hx_lambda(array(), "minject_Injector_0"), 'execute'));
		if($info->ctor === null) {
			$info->ctor = new minject_point_ConstructorInjectionPoint((new _hx_array(array())));
		}
		{
			$GLOBALS['%s']->pop();
			return $info;
		}
		$GLOBALS['%s']->pop();
	}
	public function addClassToInfo($forClass, $info, $injected) {
		$GLOBALS['%s']->push("minject.Injector::addClassToInfo");
		$__hx__spos = $GLOBALS['%s']->length;
		$meta = haxe_rtti_Meta::getType($forClass);
		$tmp = null;
		if($meta !== null) {
			$tmp = _hx_has_field($meta, "interface");
		} else {
			$tmp = false;
		}
		if($tmp) {
			throw new HException("Interfaces can't be used as instantiatable classes.");
		}
		$fields = $meta->rtti;
		if($fields !== null) {
			$_g = 0;
			while($_g < $fields->length) {
				$field = $fields[$_g];
				++$_g;
				$name = $field[0];
				$tmp1 = $injected->indexOf($name, null);
				if($tmp1 > -1) {
					continue;
				}
				$injected->push($name);
				$tmp2 = $field->length === 3;
				if($tmp2) {
					$tmp3 = $field[1];
					$tmp4 = $field[2];
					$info->fields->push(new minject_point_PropertyInjectionPoint($name, $tmp3, $tmp4));
					unset($tmp4,$tmp3);
				} else {
					if($name === "new") {
						$tmp5 = $field->slice(2, null);
						$info->ctor = new minject_point_ConstructorInjectionPoint($tmp5);
						unset($tmp5);
					} else {
						$orderStr = $field[1];
						if($orderStr === "") {
							$tmp6 = $field->slice(2, null);
							$info->fields->push(new minject_point_MethodInjectionPoint($name, $tmp6));
							unset($tmp6);
						} else {
							$order = Std::parseInt($orderStr);
							$tmp7 = $field->slice(2, null);
							$info->fields->push(new minject_point_PostInjectionPoint($name, $tmp7, $order));
							unset($tmp7,$order);
						}
						unset($orderStr);
					}
				}
				unset($tmp2,$tmp1,$name,$field);
			}
		}
		$superClass = Type::getSuperClass($forClass);
		if($superClass !== null) {
			$this->addClassToInfo($superClass, $info, $injected);
		}
		$GLOBALS['%s']->pop();
	}
	public function getMappingKey($type, $name) {
		$GLOBALS['%s']->push("minject.Injector::getMappingKey");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $name === null;
		if($tmp) {
			$name = "";
		}
		{
			$tmp2 = "" . _hx_string_or_null($type) . "#" . _hx_string_or_null($name);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static function getValueType($value) {
		$GLOBALS['%s']->push("minject.Injector::getValueType");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Std::is($value, _hx_qtype("String"));
		if($tmp) {
			$GLOBALS['%s']->pop();
			return "String";
		}
		$tmp1 = Std::is($value, _hx_qtype("Class"));
		if($tmp1) {
			$tmp2 = Type::getClassName($value);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$tmp2 = Std::is($value, _hx_qtype("Enum"));
		if($tmp2) {
			$tmp3 = Type::getEnumName($value);
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$name = null;
		$_g = Type::typeof($value);
		switch($_g->index) {
		case 1:{
			$name = "Int";
		}break;
		case 3:{
			$name = "Bool";
		}break;
		case 6:{
			$name = Type::getClassName(_hx_deref($_g)->params[0]);
		}break;
		case 7:{
			$name = Type::getEnumName(_hx_deref($_g)->params[0]);
		}break;
		default:{
			$name = null;
		}break;
		}
		if($name !== null) {
			$GLOBALS['%s']->pop();
			return $name;
		}
		$tmp3 = Std::string($value);
		throw new HException("Could not determine type name of " . _hx_string_or_null($tmp3));
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'minject.Injector'; }
}
function minject_Injector_0($p1, $p2) {
	{
		$GLOBALS['%s']->push("minject.Injector::createInfo@355");
		$__hx__spos = $GLOBALS['%s']->length;
		$post1 = Std::instance($p1, _hx_qtype("minject.point.PostInjectionPoint"));
		$post2 = Std::instance($p2, _hx_qtype("minject.point.PostInjectionPoint"));
		if($post1 === null) {
			if($post2 === null) {
				$GLOBALS['%s']->pop();
				return 0;
			} else {
				$GLOBALS['%s']->pop();
				return -1;
			}
		} else {
			if($post2 === null) {
				$GLOBALS['%s']->pop();
				return 1;
			} else {
				$tmp = $post1->order - $post2->order;
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$GLOBALS['%s']->pop();
	}
}
