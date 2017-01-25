<?php

// Generated by Haxe 3.3.0
class haxe_remoting_Context {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("haxe.remoting.Context::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->objects = new haxe_ds_StringMap();
		$GLOBALS['%s']->pop();
	}}
	public $objects;
	public function addObject($name, $obj, $recursive = null) {
		$GLOBALS['%s']->push("haxe.remoting.Context::addObject");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->objects->set($name, _hx_anonymous(array("obj" => $obj, "rec" => $recursive)));
		$GLOBALS['%s']->pop();
	}
	public function call($path, $params) {
		$GLOBALS['%s']->push("haxe.remoting.Context::call");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $path->length < 2;
		if($tmp) {
			$tmp1 = $path->join(".");
			throw new HException("Invalid path '" . _hx_string_or_null($tmp1) . "'");
		}
		$tmp2 = $path[0];
		$inf = $this->objects->get($tmp2);
		if($inf === null) {
			throw new HException("No such object " . _hx_string_or_null($path[0]));
		}
		$o = $inf->obj;
		$tmp3 = $path[1];
		$m = Reflect::field($o, $tmp3);
		$tmp4 = $path->length > 2;
		if($tmp4) {
			$tmp5 = !$inf->rec;
			if($tmp5) {
				$tmp6 = $path->join(".");
				throw new HException("Can't access " . _hx_string_or_null($tmp6));
			}
			{
				$_g1 = 2;
				$_g = $path->length;
				while($_g1 < $_g) {
					$i = $_g1++;
					$o = $m;
					$tmp7 = $path[$i];
					$m = Reflect::field($o, $tmp7);
					unset($tmp7,$i);
				}
			}
		}
		$tmp8 = !Reflect::isFunction($m);
		if($tmp8) {
			$tmp9 = $path->join(".");
			throw new HException("No such method " . _hx_string_or_null($tmp9));
		}
		{
			$tmp5 = Reflect::callMethod($o, $m, $params);
			$GLOBALS['%s']->pop();
			return $tmp5;
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
	static function share($name, $obj) {
		$GLOBALS['%s']->push("haxe.remoting.Context::share");
		$__hx__spos = $GLOBALS['%s']->length;
		$ctx = new haxe_remoting_Context();
		$ctx->addObject($name, $obj, null);
		{
			$GLOBALS['%s']->pop();
			return $ctx;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'haxe.remoting.Context'; }
}
