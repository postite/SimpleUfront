<?php

// Generated by Haxe 3.3.0
class php_Web {
	public function __construct(){}
	static function getParams() {
		$GLOBALS['%s']->push("php.Web::getParams");
		$__hx__spos = $GLOBALS['%s']->length;
		$a = array_merge($_GET, $_POST);
		$tmp = get_magic_quotes_gpc();
		if($tmp) {
			reset($a); while(list($k, $v) = each($a)) $a[$k] = stripslashes((string)$v);
		}
		{
			$tmp2 = php_Lib::hashOfAssociativeArray($a);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getParamValues($param) {
		$GLOBALS['%s']->push("php.Web::getParamValues");
		$__hx__spos = $GLOBALS['%s']->length;
		$reg = new EReg("^" . _hx_string_or_null($param) . "(\\[|%5B)([0-9]*?)(\\]|%5D)=(.*?)\$", "");
		$res = new _hx_array(array());
		$explore = array(new _hx_lambda(array(&$reg, &$res), "php_Web_0"), 'execute');
		$s1 = php_Web::getParamsString();
		$tmp3 = str_replace(";", "&", $s1);
		call_user_func_array($explore, array($tmp3));
		$tmp4 = php_Web::getPostData();
		call_user_func_array($explore, array($tmp4));
		$tmp5 = $res->length === 0;
		if($tmp5) {
			$tmp6 = $_POST;
			$post = php_Lib::hashOfAssociativeArray($tmp6);
			$data1 = $post->get($param);
			$k = 0;
			$v = "";
			$tmp7 = is_array($data1);
			if($tmp7) {
				 reset($data); while(list($k, $v) = each($data)) { 
				$res[$k] = $v;
				 } 
			}
		}
		if($res->length === 0) {
			$GLOBALS['%s']->pop();
			return null;
		}
		{
			$GLOBALS['%s']->pop();
			return $res;
		}
		$GLOBALS['%s']->pop();
	}
	static function getHostName() {
		$GLOBALS['%s']->push("php.Web::getHostName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $_SERVER['SERVER_NAME'];
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getClientIP() {
		$GLOBALS['%s']->push("php.Web::getClientIP");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $_SERVER['REMOTE_ADDR'];
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getURI() {
		$GLOBALS['%s']->push("php.Web::getURI");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = $_SERVER['REQUEST_URI'];
		$tmp = _hx_explode("?", $s);
		{
			$tmp2 = $tmp[0];
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function redirect($url) {
		$GLOBALS['%s']->push("php.Web::redirect");
		$__hx__spos = $GLOBALS['%s']->length;
		header("Location: " . _hx_string_or_null($url));
		$GLOBALS['%s']->pop();
	}
	static function setHeader($h, $v) {
		$GLOBALS['%s']->push("php.Web::setHeader");
		$__hx__spos = $GLOBALS['%s']->length;
		header(_hx_string_or_null($h) . ": " . _hx_string_or_null($v));
		$GLOBALS['%s']->pop();
	}
	static function setReturnCode($r) {
		$GLOBALS['%s']->push("php.Web::setReturnCode");
		$__hx__spos = $GLOBALS['%s']->length;
		$code = null;
		switch($r) {
		case 100:{
			$code = "100 Continue";
		}break;
		case 101:{
			$code = "101 Switching Protocols";
		}break;
		case 200:{
			$code = "200 OK";
		}break;
		case 201:{
			$code = "201 Created";
		}break;
		case 202:{
			$code = "202 Accepted";
		}break;
		case 203:{
			$code = "203 Non-Authoritative Information";
		}break;
		case 204:{
			$code = "204 No Content";
		}break;
		case 205:{
			$code = "205 Reset Content";
		}break;
		case 206:{
			$code = "206 Partial Content";
		}break;
		case 300:{
			$code = "300 Multiple Choices";
		}break;
		case 301:{
			$code = "301 Moved Permanently";
		}break;
		case 302:{
			$code = "302 Found";
		}break;
		case 303:{
			$code = "303 See Other";
		}break;
		case 304:{
			$code = "304 Not Modified";
		}break;
		case 305:{
			$code = "305 Use Proxy";
		}break;
		case 307:{
			$code = "307 Temporary Redirect";
		}break;
		case 400:{
			$code = "400 Bad Request";
		}break;
		case 401:{
			$code = "401 Unauthorized";
		}break;
		case 402:{
			$code = "402 Payment Required";
		}break;
		case 403:{
			$code = "403 Forbidden";
		}break;
		case 404:{
			$code = "404 Not Found";
		}break;
		case 405:{
			$code = "405 Method Not Allowed";
		}break;
		case 406:{
			$code = "406 Not Acceptable";
		}break;
		case 407:{
			$code = "407 Proxy Authentication Required";
		}break;
		case 408:{
			$code = "408 Request Timeout";
		}break;
		case 409:{
			$code = "409 Conflict";
		}break;
		case 410:{
			$code = "410 Gone";
		}break;
		case 411:{
			$code = "411 Length Required";
		}break;
		case 412:{
			$code = "412 Precondition Failed";
		}break;
		case 413:{
			$code = "413 Request Entity Too Large";
		}break;
		case 414:{
			$code = "414 Request-URI Too Long";
		}break;
		case 415:{
			$code = "415 Unsupported Media Type";
		}break;
		case 416:{
			$code = "416 Requested Range Not Satisfiable";
		}break;
		case 417:{
			$code = "417 Expectation Failed";
		}break;
		case 500:{
			$code = "500 Internal Server Error";
		}break;
		case 501:{
			$code = "501 Not Implemented";
		}break;
		case 502:{
			$code = "502 Bad Gateway";
		}break;
		case 503:{
			$code = "503 Service Unavailable";
		}break;
		case 504:{
			$code = "504 Gateway Timeout";
		}break;
		case 505:{
			$code = "505 HTTP Version Not Supported";
		}break;
		default:{
			$code = Std::string($r);
		}break;
		}
		header("HTTP/1.1 " . _hx_string_or_null($code), true, $r);
		$GLOBALS['%s']->pop();
	}
	static function getClientHeader($k) {
		$GLOBALS['%s']->push("php.Web::getClientHeader");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = strtoupper($k);
		$k1 = str_replace("-", "_", $s);
		{
			$tmp = php_Web::getClientHeaders()->iterator();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$i = $tmp->next();
				if($i->header === $k1) {
					$tmp2 = $i->value;
					$GLOBALS['%s']->pop();
					return $tmp2;
					unset($tmp2);
				}
				unset($tmp1,$i);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static $_client_headers;
	static function getClientHeaders() {
		$GLOBALS['%s']->push("php.Web::getClientHeaders");
		$__hx__spos = $GLOBALS['%s']->length;
		if(php_Web::$_client_headers === null) {
			php_Web::$_client_headers = new HList();
			$tmp = $_SERVER;
			$h = php_Lib::hashOfAssociativeArray($tmp);
			{
				$tmp1 = $h->keys();
				while(true) {
					$tmp2 = !$tmp1->hasNext();
					if($tmp2) {
						break;
					}
					$k = $tmp1->next();
					$tmp3 = _hx_substr($k, 0, 5);
					if($tmp3 === "HTTP_") {
						$tmp4 = _hx_substr($k, 5, null);
						php_Web::$_client_headers->add(_hx_anonymous(array("header" => $tmp4, "value" => $h->get($k))));
						unset($tmp4);
					} else {
						$tmp5 = _hx_substr($k, 0, 8);
						if($tmp5 === "CONTENT_") {
							php_Web::$_client_headers->add(_hx_anonymous(array("header" => $k, "value" => $h->get($k))));
						}
						unset($tmp5);
					}
					unset($tmp3,$tmp2,$k);
				}
			}
		}
		{
			$tmp = php_Web::$_client_headers;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function getParamsString() {
		$GLOBALS['%s']->push("php.Web::getParamsString");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = isset($_SERVER["QUERY_STRING"]);
		if($tmp) {
			$tmp2 = $_SERVER["QUERY_STRING"];
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$GLOBALS['%s']->pop();
			return "";
		}
		$GLOBALS['%s']->pop();
	}
	static function getPostData() {
		$GLOBALS['%s']->push("php.Web::getPostData");
		$__hx__spos = $GLOBALS['%s']->length;
		$h = fopen("php://input", "r");
		$bsize = 8192;
		$max = 32;
		$data = null;
		$counter = 0;
		while(true) {
			$tmp = null;
			$tmp1 = feof($h);
			if($tmp1) {
				$tmp = $counter < $max;
			} else {
				$tmp = false;
			}
			if(!(!$tmp)) {
				break;
			}
			$tmp2 = fread($h, $bsize);
			$data .= _hx_string_or_null($tmp2);
			++$counter;
			unset($tmp2,$tmp1,$tmp);
		}
		fclose($h);
		{
			$GLOBALS['%s']->pop();
			return $data;
		}
		$GLOBALS['%s']->pop();
	}
	static function getCookies() {
		$GLOBALS['%s']->push("php.Web::getCookies");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $_COOKIE;
		{
			$tmp2 = php_Lib::hashOfAssociativeArray($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function setCookie($key, $value, $expire = null, $domain = null, $path = null, $secure = null, $httpOnly = null) {
		$GLOBALS['%s']->push("php.Web::setCookie");
		$__hx__spos = $GLOBALS['%s']->length;
		$t = null;
		if($expire === null) {
			$t = 0;
		} else {
			$tmp = $expire->getTime();
			$t = Std::int($tmp / 1000.0);
		}
		$tmp1 = $path === null;
		if($tmp1) {
			$path = "/";
		}
		$tmp2 = $domain === null;
		if($tmp2) {
			$domain = "";
		}
		$tmp3 = $secure === null;
		if($tmp3) {
			$secure = false;
		}
		$tmp4 = $httpOnly === null;
		if($tmp4) {
			$httpOnly = false;
		}
		setcookie($key, $value, $t, $path, $domain, $secure, $httpOnly);
		$GLOBALS['%s']->pop();
	}
	static function getAuthorization() {
		$GLOBALS['%s']->push("php.Web::getAuthorization");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !isset($_SERVER['PHP_AUTH_USER']);
		if($tmp) {
			$GLOBALS['%s']->pop();
			return null;
		}
		$tmp1 = $_SERVER['PHP_AUTH_USER'];
		$tmp2 = $_SERVER['PHP_AUTH_PW'];
		{
			$tmp3 = _hx_anonymous(array("user" => $tmp1, "pass" => $tmp2));
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$GLOBALS['%s']->pop();
	}
	static function getCwd() {
		$GLOBALS['%s']->push("php.Web::getCwd");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = dirname($_SERVER["SCRIPT_FILENAME"]);
		{
			$tmp2 = _hx_string_or_null($tmp) . "/";
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function getMultipart($maxSize) {
		$GLOBALS['%s']->push("php.Web::getMultipart");
		$__hx__spos = $GLOBALS['%s']->length;
		$h = new haxe_ds_StringMap();
		$buf = null;
		$curname = null;
		php_Web::parseMultipart(array(new _hx_lambda(array(&$buf, &$curname, &$h, &$maxSize), "php_Web_1"), 'execute'), array(new _hx_lambda(array(&$buf, &$maxSize), "php_Web_2"), 'execute'));
		if($curname !== null) {
			$h->set($curname, $buf->b);
		}
		{
			$tmp = $h;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function parseMultipart($onPart, $onData) {
		$GLOBALS['%s']->push("php.Web::parseMultipart");
		$__hx__spos = $GLOBALS['%s']->length;
		$a = $_POST;
		$tmp = get_magic_quotes_gpc();
		if($tmp) {
			reset($a); while(list($k, $v) = each($a)) $a[$k] = stripslashes((string)$v);
		}
		$post = php_Lib::hashOfAssociativeArray($a);
		{
			$tmp1 = $post->keys();
			while(true) {
				$tmp2 = !$tmp1->hasNext();
				if($tmp2) {
					break;
				}
				$key = $tmp1->next();
				call_user_func_array($onPart, array($key, ""));
				$v = $post->get($key);
				$tmp3 = haxe_io_Bytes::ofString($v);
				$tmp4 = strlen($v);
				call_user_func_array($onData, array($tmp3, 0, $tmp4));
				unset($v,$tmp4,$tmp3,$tmp2,$key);
			}
		}
		$tmp5 = !isset($_FILES);
		if($tmp5) {
			$GLOBALS['%s']->pop();
			return;
		}
		$parts = new _hx_array(array_keys($_FILES));
		{
			$_g = 0;
			while($_g < $parts->length) {
				$part = $parts[$_g];
				++$_g;
				$info = $_FILES[$part];
				$tmp6 = $info["tmp_name"];
				$file = $info["name"];
				$err = $info["error"];
				if($err > 0) {
					switch($err) {
					case 1:{
						$tmp7 = ini_get("upload_max_filesize");
						throw new HException("The uploaded file exceeds the max size of " . _hx_string_or_null($tmp7));
					}break;
					case 2:{
						$tmp8 = ini_get("post_max_size");
						throw new HException("The uploaded file exceeds the max file size directive specified in the HTML form (max is" . _hx_string_or_null((_hx_string_or_null($tmp8) . ")")));
					}break;
					case 3:{
						throw new HException("The uploaded file was only partially uploaded");
					}break;
					case 4:{
						continue 2;
					}break;
					case 6:{
						throw new HException("Missing a temporary folder");
					}break;
					case 7:{
						throw new HException("Failed to write file to disk");
					}break;
					case 8:{
						throw new HException("File upload stopped by extension");
					}break;
					}
				}
				call_user_func_array($onPart, array($part, $file));
				if("" !== $file) {
					$h = fopen($tmp6, "r");
					$bsize = 8192;
					while(true) {
						$tmp9 = !(!feof($h));
						if($tmp9) {
							break;
						}
						$buf = fread($h, $bsize);
						$size = strlen($buf);
						call_user_func_array($onData, array(haxe_io_Bytes::ofString($buf), 0, $size));
						unset($tmp9,$size,$buf);
					}
					fclose($h);
					unset($h,$bsize);
				}
				unset($tmp6,$part,$info,$file,$err);
			}
		}
		$GLOBALS['%s']->pop();
	}
	static function flush() {
		$GLOBALS['%s']->push("php.Web::flush");
		$__hx__spos = $GLOBALS['%s']->length;
		flush();
		$GLOBALS['%s']->pop();
	}
	static function getMethod() {
		$GLOBALS['%s']->push("php.Web::getMethod");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = isset($_SERVER['REQUEST_METHOD']);
		if($tmp) {
			$tmp2 = $_SERVER['REQUEST_METHOD'];
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static $isModNeko;
	function __toString() { return 'php.Web'; }
}
php_Web::$isModNeko = !php_Lib::isCli();
function php_Web_0(&$reg, &$res, $data) {
	{
		$GLOBALS['%s']->push("php.Web::getParamValues@66");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($data !== null) {
			$tmp = strlen($data) === 0;
		} else {
			$tmp = true;
		}
		if($tmp) {
			$GLOBALS['%s']->pop();
			return;
		}
		{
			$_g = 0;
			$_g1 = _hx_explode("&", $data);
			while($_g < $_g1->length) {
				$part = $_g1[$_g];
				++$_g;
				$tmp1 = $reg->match($part);
				if($tmp1) {
					$idx = $reg->matched(2);
					$s = $reg->matched(4);
					$val = urldecode($s);
					if($idx === "") {
						$res->push($val);
					} else {
						$tmp2 = Std::parseInt($idx);
						$res[$tmp2] = $val;
						unset($tmp2);
					}
					unset($val,$s,$idx);
				}
				unset($tmp1,$part);
			}
		}
		$GLOBALS['%s']->pop();
	}
}
function php_Web_1(&$buf, &$curname, &$h, &$maxSize, $p, $_) {
	{
		$GLOBALS['%s']->push("php.Web::getMultipart@300");
		$__hx__spos = $GLOBALS['%s']->length;
		if($curname !== null) {
			$h->set($curname, $buf->b);
		}
		$curname = $p;
		$buf = new StringBuf();
		$maxSize -= strlen($p);
		if($maxSize < 0) {
			throw new HException("Maximum size reached");
		}
		$GLOBALS['%s']->pop();
	}
}
function php_Web_2(&$buf, &$maxSize, $str, $pos, $len) {
	{
		$GLOBALS['%s']->push("php.Web::getMultipart@308");
		$__hx__spos = $GLOBALS['%s']->length;
		$maxSize -= $len;
		if($maxSize < 0) {
			throw new HException("Maximum size reached");
		}
		{
			$s = $str->toString();
			$buf->b .= _hx_string_or_null(_hx_substr($s, $pos, $len));
		}
		$GLOBALS['%s']->pop();
	}
}
