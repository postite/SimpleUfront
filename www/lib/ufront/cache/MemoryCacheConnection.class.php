<?php

// Generated by Haxe 3.3.0
class ufront_cache_MemoryCacheConnection implements ufront_cache_UFCacheConnectionSync, ufront_cache_UFCacheConnection{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.cache.MemoryCacheConnection::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->caches = new haxe_ds_StringMap();
		$GLOBALS['%s']->pop();
	}}
	public $caches;
	public function getNamespaceSync($namespace) {
		$GLOBALS['%s']->push("ufront.cache.MemoryCacheConnection::getNamespaceSync");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->caches->exists($namespace);
		if($tmp) {
			$tmp2 = $this->caches->get($namespace);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$v = new ufront_cache_MemoryCache();
			$this->caches->set($namespace, $v);
			{
				$GLOBALS['%s']->pop();
				return $v;
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function getNamespace($namespace) {
		$GLOBALS['%s']->push("ufront.cache.MemoryCacheConnection::getNamespace");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->getNamespaceSync($namespace);
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
	function __toString() { return 'ufront.cache.MemoryCacheConnection'; }
}
