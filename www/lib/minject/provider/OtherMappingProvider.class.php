<?php

// Generated by Haxe 3.3.0
class minject_provider_OtherMappingProvider implements minject_provider_DependencyProvider{
	public function __construct($mapping) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("minject.provider.OtherMappingProvider::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->mapping = $mapping;
		$GLOBALS['%s']->pop();
	}}
	public $mapping;
	public function getValue($injector) {
		$GLOBALS['%s']->push("minject.provider.OtherMappingProvider::getValue");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->mapping->getValue($injector);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("minject.provider.OtherMappingProvider::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->mapping->toString();
			$GLOBALS['%s']->pop();
			return $tmp;
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
	function __toString() { return $this->toString(); }
}
