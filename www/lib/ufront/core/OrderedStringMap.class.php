<?php

// Generated by Haxe 3.3.0
class ufront_core_OrderedStringMap {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->length = 0;
		$this->__keys = (new _hx_array(array()));
		$this->__hash = new haxe_ds_StringMap();
		$GLOBALS['%s']->pop();
	}}
	public $length;
	public function set($key, $value) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::set");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->__hash->exists($key);
		if($tmp) {
			$this->__keys->push($key);
			$this->length++;
		}
		$this->__hash->set($key, $value);
		$GLOBALS['%s']->pop();
	}
	public function setAt($index, $key, $value) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::setAt");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->remove($key);
		$this->__keys->insert($index, $key);
		$this->__hash->set($key, $value);
		$this->length++;
		$GLOBALS['%s']->pop();
	}
	public function get($key) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::get");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__hash->get($key);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getAt($index) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::getAt");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->__keys[$index];
		{
			$tmp2 = $this->__hash->get($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function indexOf($key) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::indexOf");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->__hash->exists($key);
		if($tmp) {
			$GLOBALS['%s']->pop();
			return -1;
		}
		{
			$_g1 = 0;
			$_g = $this->__keys->length;
			while($_g1 < $_g) {
				$i = $_g1++;
				if($this->__keys[$i] === $key) {
					$GLOBALS['%s']->pop();
					return $i;
				}
				unset($i);
			}
		}
		throw new HException(ufront_web_HttpError::internalServerError("" . _hx_string_or_null($key) . " exists in hash but not in array", null, _hx_anonymous(array("fileName" => "OrderedStringMap.hx", "lineNumber" => 51, "className" => "ufront.core.OrderedStringMap", "methodName" => "indexOf"))));
		$GLOBALS['%s']->pop();
	}
	public function exists($key) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__hash->exists($key);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function remove($key) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		$item = $this->__hash->get($key);
		if($item === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$this->__hash->remove($key);
		$this->__keys->remove($key);
		$this->length--;
		{
			$GLOBALS['%s']->pop();
			return $item;
		}
		$GLOBALS['%s']->pop();
	}
	public function removeAt($index) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::removeAt");
		$__hx__spos = $GLOBALS['%s']->length;
		$key = $this->__keys[$index];
		if($key === null) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$item = $this->__hash->get($key);
		$this->__hash->remove($key);
		$this->__keys->remove($key);
		$this->length--;
		{
			$GLOBALS['%s']->pop();
			return $item;
		}
		$GLOBALS['%s']->pop();
	}
	public function keyAt($index) {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::keyAt");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__keys[$index];
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function keys() {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::keys");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__keys->iterator();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function iterator() {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::iterator");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->harray()->iterator();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function clear() {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::clear");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->__hash = new haxe_ds_StringMap();
		$this->__keys = (new _hx_array(array()));
		$this->length = 0;
		$GLOBALS['%s']->pop();
	}
	public function harray() {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::array");
		$__hx__spos = $GLOBALS['%s']->length;
		$values = (new _hx_array(array()));
		{
			$_g = 0;
			$_g1 = $this->__keys;
			while($_g < $_g1->length) {
				$k = $_g1[$_g];
				++$_g;
				$tmp = $this->__hash->get($k);
				$values->push($tmp);
				unset($tmp,$k);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $values;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("ufront.core.OrderedStringMap::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = new StringBuf();
		$s->add("{");
		$it = $this->keys();
		while(true) {
			$tmp = !$it->hasNext();
			if($tmp) {
				break;
			}
			$i = $it->next();
			$s->add($i);
			$s->add(" => ");
			$tmp1 = $this->get($i);
			$tmp2 = Std::string($tmp1);
			$s->add($tmp2);
			$tmp3 = $it->hasNext();
			if($tmp3) {
				$s->add(", ");
			}
			unset($tmp3,$tmp2,$tmp1,$tmp,$i);
		}
		$s->add("}");
		{
			$tmp = $s->b;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public $__keys;
	public $__hash;
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
	function __toString() { return $this->toString(); }
}
