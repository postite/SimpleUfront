<?php

// Generated by Haxe 3.3.0
class ufront_web_url_PartialUrl {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.url.PartialUrl::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->segments = (new _hx_array(array()));
		$this->query = (new _hx_array(array()));
		$this->fragment = null;
		$GLOBALS['%s']->pop();
	}}
	public $segments;
	public $query;
	public $fragment;
	public function queryString() {
		$GLOBALS['%s']->push("ufront.web.url.PartialUrl::queryString");
		$__hx__spos = $GLOBALS['%s']->length;
		$params = (new _hx_array(array()));
		{
			$_g = 0;
			$_g1 = $this->query;
			while($_g < $_g1->length) {
				$param = $_g1[$_g];
				++$_g;
				$value = null;
				$tmp = $param->encoded;
				if($tmp) {
					$value = $param->value;
				} else {
					$value = rawurlencode($param->value);
				}
				$params->push(_hx_string_or_null($param->name) . "=" . _hx_string_or_null($value));
				unset($value,$tmp,$param);
			}
		}
		{
			$tmp = $params->join("&");
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("ufront.web.url.PartialUrl::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->segments->join("/");
		$url = "/" . _hx_string_or_null($tmp);
		$qs = $this->queryString();
		if(strlen($qs) > 0) {
			$url .= "?" . _hx_string_or_null($qs);
		}
		if(null !== $this->fragment) {
			$url .= "#" . _hx_string_or_null($this->fragment);
		}
		{
			$GLOBALS['%s']->pop();
			return $url;
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
	static function parse($url) {
		$GLOBALS['%s']->push("ufront.web.url.PartialUrl::parse");
		$__hx__spos = $GLOBALS['%s']->length;
		$u = new ufront_web_url_PartialUrl();
		ufront_web_url_PartialUrl::feed($u, $url);
		{
			$GLOBALS['%s']->pop();
			return $u;
		}
		$GLOBALS['%s']->pop();
	}
	static function feed($u, $url) {
		$GLOBALS['%s']->push("ufront.web.url.PartialUrl::feed");
		$__hx__spos = $GLOBALS['%s']->length;
		$parts = _hx_explode("#", $url);
		$tmp = $parts->length > 1;
		if($tmp) {
			$u->fragment = $parts[1];
		}
		$parts = _hx_explode("?", $parts[0]);
		$tmp1 = $parts->length > 1;
		if($tmp1) {
			$pairs = _hx_explode("&", $parts[1]);
			{
				$_g = 0;
				while($_g < $pairs->length) {
					$s = $pairs[$_g];
					++$_g;
					$pair = _hx_explode("=", $s);
					$tmp2 = $pair[0];
					$tmp3 = $pair[1];
					$u->query->push(_hx_anonymous(array("name" => $tmp2, "value" => $tmp3, "encoded" => true)));
					unset($tmp3,$tmp2,$s,$pair);
				}
			}
		}
		$segments = _hx_explode("/", $parts[0]);
		$tmp4 = $segments[0] === "";
		if($tmp4) {
			$segments->shift();
		}
		$tmp5 = null;
		if($segments->length === 1) {
			$tmp5 = $segments[0] === "";
		} else {
			$tmp5 = false;
		}
		if($tmp5) {
			$segments->pop();
		}
		$u->segments = $segments;
		$GLOBALS['%s']->pop();
	}
	function __toString() { return $this->toString(); }
}
