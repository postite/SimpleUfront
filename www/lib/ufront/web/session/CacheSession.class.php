<?php

// Generated by Haxe 3.3.0
class ufront_web_session_CacheSession implements ufront_web_session_UFHttpSession{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->started = false;
		$this->commitFlag = false;
		$this->closeFlag = false;
		$this->regenerateFlag = false;
		$this->expiryFlag = false;
		$this->sessionData = null;
		$this->sessionID = null;
		$this->oldSessionID = null;
		$GLOBALS['%s']->pop();
	}}
	public $started;
	public $commitFlag;
	public $closeFlag;
	public $regenerateFlag;
	public $expiryFlag;
	public $sessionID;
	public $oldSessionID;
	public $sessionData;
	public $cache;
	public $context;
	public $sessionName;
	public $expiry;
	public $savePath;
	public function injectConfig($context, $cacheConnection) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::injectConfig");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->context = $context;
		$tmp = null;
		$tmp1 = $context->injector->hasMappingForType("String", "sessionName");
		if($tmp1) {
			$tmp = $context->injector->getValueForType("String", "sessionName");
		} else {
			$tmp = ufront_web_session_CacheSession::$defaultSessionName;
		}
		$this->sessionName = $tmp;
		$tmp2 = null;
		$tmp3 = $context->injector->hasMappingForType("Int", "sessionExpiry");
		if($tmp3) {
			$tmp2 = $context->injector->getValueForType("Int", "sessionExpiry");
		} else {
			$tmp2 = ufront_web_session_CacheSession::$defaultExpiry;
		}
		$this->expiry = $tmp2;
		$tmp4 = null;
		$tmp5 = $context->injector->hasMappingForType("String", "sessionSavePath");
		if($tmp5) {
			$tmp4 = $context->injector->getValueForType("String", "sessionSavePath");
		} else {
			$tmp4 = ufront_web_session_CacheSession::$defaultSavePath;
		}
		$this->savePath = $tmp4;
		$tmp6 = null;
		if($cacheConnection === null) {
			throw new HException(ufront_web_HttpError::internalServerError("No UFCacheConnection was injected into CacheSession", null, _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 166, "className" => "ufront.web.session.CacheSession", "methodName" => "injectConfig"))));
		} else {
			$tmp6 = $cacheConnection->getNamespace($this->savePath);
		}
		$this->cache = $tmp6;
		$GLOBALS['%s']->pop();
	}
	public function setExpiry($e) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::setExpiry");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->expiry = $e;
		$GLOBALS['%s']->pop();
	}
	public function init() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::init");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$startFreshSession = array(new _hx_lambda(array(&$_gthis), "ufront_web_session_CacheSession_0"), 'execute');
		$tmp = !$this->started;
		if($tmp) {
			$this->get_id();
			$tmp1 = null;
			if($this->sessionID !== null) {
				$id = $this->sessionID;
				$tmp2 = null;
				if($id !== null) {
					$tmp2 = ufront_core_Uuid::isValid($id);
				} else {
					$tmp2 = false;
				}
				$tmp1 = !$tmp2;
			} else {
				$tmp1 = true;
			}
			if($tmp1) {
				$tmp3 = call_user_func($startFreshSession);
				{
					$tmp2 = ufront_core_SurpriseTools::asSurprise($tmp3);
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			} else {
				$tmp4 = $this->cache->get($this->sessionID);
				{
					$tmp2 = tink_core__Future_Future_Impl_::map($tmp4, array(new _hx_lambda(array(&$_gthis, &$startFreshSession), "ufront_web_session_CacheSession_1"), 'execute'), null);
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			}
		} else {
			$tmp11 = tink_core_Outcome::Success(tink_core_Noise::$Noise);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($tmp11);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function commit() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$oldSessionID = $this->sessionID;
		$sessionIDSurprise = null;
		$tmp = null;
		if($this->sessionID !== null) {
			$tmp = $this->regenerateFlag;
		} else {
			$tmp = true;
		}
		if($tmp) {
			$sessionIDSurprise = $this->findNewSessionID();
		} else {
			$tmp1 = tink_core_Outcome::Success($this->sessionID);
			$sessionIDSurprise = tink_core__Future_Future_Impl_::sync($tmp1);
		}
		$tmp2 = tink_core__Future_Future_Impl_::_tryMap($sessionIDSurprise, array(new _hx_lambda(array(&$_gthis), "ufront_web_session_CacheSession_2"), 'execute'));
		$tmp3 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp2, array(new _hx_lambda(array(&$_gthis, &$oldSessionID), "ufront_web_session_CacheSession_3"), 'execute'));
		$tmp7 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp3, array(new _hx_lambda(array(&$_gthis), "ufront_web_session_CacheSession_4"), 'execute'));
		$tmp11 = tink_core__Future_Future_Impl_::_tryMap($tmp7, array(new _hx_lambda(array(&$_gthis), "ufront_web_session_CacheSession_5"), 'execute'));
		{
			$tmp4 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp11, array(new _hx_lambda(array(&$_gthis), "ufront_web_session_CacheSession_6"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	public function findNewSessionID() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::findNewSessionID");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$tryID = ufront_core_Uuid::create();
		$tmp = $this->cache->get($tryID);
		{
			$tmp2 = tink_core__Future_Future_Impl_::flatMap($tmp, array(new _hx_lambda(array(&$_gthis, &$tryID), "ufront_web_session_CacheSession_7"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function setCookie($id, $expiryLength) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::setCookie");
		$__hx__spos = $GLOBALS['%s']->length;
		$expireAt = null;
		if($expiryLength <= 0) {
			$expireAt = null;
		} else {
			$d = Date::now();
			$tmp = $d->getTime();
			$expireAt = Date::fromTime($tmp + 1000.0 * $expiryLength);
		}
		$sessionCookie = new ufront_web_HttpCookie($this->sessionName, $id, $expireAt, null, "/", false, null);
		if($expiryLength < 0) {
			$sessionCookie->expireNow();
		}
		$this->context->response->setCookie($sessionCookie);
		$GLOBALS['%s']->pop();
	}
	public function get($name) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::get");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 320, "className" => "ufront.web.session.CacheSession", "methodName" => "get")), _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$tmp2 = $this->sessionData->get($name);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	public function set($name, $value) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::set");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 332, "className" => "ufront.web.session.CacheSession", "methodName" => "set")), _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$this->sessionData->set($name, $value);
			$this->commitFlag = true;
		}
		$GLOBALS['%s']->pop();
	}
	public function exists($name) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 345, "className" => "ufront.web.session.CacheSession", "methodName" => "exists")), _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$tmp2 = $this->sessionData->exists($name);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	public function remove($name) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 355, "className" => "ufront.web.session.CacheSession", "methodName" => "remove")), _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$this->sessionData->remove($name);
			$this->commitFlag = true;
		}
		$GLOBALS['%s']->pop();
	}
	public function clear() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::clear");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($this->sessionData !== null) {
			$tmp1 = !$this->started;
			if($tmp1) {
				$tmp2 = $this->get_id();
				$tmp = $tmp2 !== null;
			} else {
				$tmp = true;
			}
		} else {
			$tmp = false;
		}
		if($tmp) {
			$this->sessionData = new haxe_ds_StringMap();
			$this->commitFlag = true;
		}
		$GLOBALS['%s']->pop();
	}
	public function triggerCommit() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::triggerCommit");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->commitFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function regenerateID() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::regenerateID");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->regenerateFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function isActive() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::isActive");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			$tmp1 = $this->get_id();
			{
				$tmp2 = $tmp1 !== null;
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
	public function isReady() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::isReady");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->started;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_id() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::get_id");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->sessionID === null) {
			$tmp = $this->context->request->get_cookies();
			$this->sessionID = ufront_core__MultiValueMap_MultiValueMap_Impl_::get($tmp, $this->sessionName);
		}
		if($this->sessionID === null) {
			$tmp1 = $this->context->request->get_params();
			$this->sessionID = ufront_core__MultiValueMap_MultiValueMap_Impl_::get($tmp1, $this->sessionName);
		}
		{
			$tmp = $this->sessionID;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function close() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::close");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 411, "className" => "ufront.web.session.CacheSession", "methodName" => "close")), _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
		}
		$this->sessionData = null;
		$this->closeFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->sessionData !== null) {
			$tmp = $this->sessionData->toString();
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return "{}";
		}
		$GLOBALS['%s']->pop();
	}
	public function generateSessionID() {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::generateSessionID");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core_Uuid::create();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function checkStarted($pos = null) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::checkStarted");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before calling init()", $pos, _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 428, "className" => "ufront.web.session.CacheSession", "methodName" => "checkStarted"))));
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
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	static $defaultSessionName = "UfrontSessionID";
	static $defaultSavePath = "sessions";
	static $defaultExpiry = 0;
	static function isValidID($id) {
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::isValidID");
		$__hx__spos = $GLOBALS['%s']->length;
		if($id !== null) {
			$tmp = ufront_core_Uuid::isValid($id);
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return false;
		}
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_id" => "get_id");
	function __toString() { return $this->toString(); }
}
ufront_web_session_CacheSession::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("rtti" => (new _hx_array(array((new _hx_array(array("injectConfig", "", "ufront.web.context.HttpContext", "", "", "ufront.cache.UFCacheConnection", "", ""))))))))));
function ufront_web_session_CacheSession_0(&$_gthis) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::init@192");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis->regenerateID();
		$_gthis->sessionData = new haxe_ds_StringMap();
		$_gthis->started = true;
		{
			$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_1(&$_gthis, &$startFreshSession, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::init@205");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp5 = $outcome->index;
		switch($tmp5) {
		case 0:{
			$data = _hx_deref($outcome)->params[0];
			$_gthis->sessionData = Std::instance($data, _hx_qtype("haxe.ds.StringMap"));
			if($_gthis->sessionData !== null) {
				$_gthis->started = true;
				{
					$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				{
					$tmp6 = "Failed to unserialize session " . _hx_string_or_null($_gthis->sessionID) . " (Was ";
					$tmp7 = Type::typeof($data);
					$tmp8 = Std::string($tmp7);
					$_gthis->context->messages->push(_hx_anonymous(array("msg" => _hx_string_or_null($tmp6) . _hx_string_or_null($tmp8) . ", expected StringMap), starting a fresh session instead.", "pos" => _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 214, "className" => "ufront.web.session.CacheSession", "methodName" => "init")), "type" => ufront_log_MessageType::$MWarning)));
				}
				{
					$tmp = call_user_func($startFreshSession);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}break;
		case 1:{
			$tmp9 = _hx_deref($outcome)->params[0]->index;
			switch($tmp9) {
			case 0:{
				$_gthis->context->messages->push(_hx_anonymous(array("msg" => "Client requested session " . _hx_string_or_null($_gthis->sessionID) . ", but it did not exist in the cache. Starting a fresh session instead.", "pos" => _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 218, "className" => "ufront.web.session.CacheSession", "methodName" => "init")), "type" => ufront_log_MessageType::$MWarning)));
				{
					$tmp = call_user_func($startFreshSession);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}break;
			case 2:{
				$_gthis->context->messages->push(_hx_anonymous(array("msg" => "Failed to read cache for session " . _hx_string_or_null($_gthis->sessionID) . ": " . _hx_string_or_null(_hx_deref(_hx_deref($outcome)->params[0])->params[0]) . ". Starting a fresh session instead.", "pos" => _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 221, "className" => "ufront.web.session.CacheSession", "methodName" => "init")), "type" => ufront_log_MessageType::$MWarning)));
				{
					$tmp = call_user_func($startFreshSession);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}break;
			default:{
				$tmp10 = tink_core_TypedError::withData(null, "Failed to initialize session", _hx_deref($outcome)->params[0], _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 224, "className" => "ufront.web.session.CacheSession", "methodName" => "init")));
				{
					$tmp = tink_core_Outcome::Failure($tmp10);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}break;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_2(&$_gthis, $id) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit@246");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis->sessionID = $id;
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_3(&$_gthis, &$oldSessionID, $_) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit@250");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp4 = $_gthis->regenerateFlag;
		if($tmp4) {
			$_gthis->commitFlag = true;
			if($oldSessionID !== null) {
				$tmp5 = $_gthis->cache->remove($oldSessionID);
				{
					$tmp = ufront_core_SurpriseTools::changeFailureToError($tmp5, null, _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 255, "className" => "ufront.web.session.CacheSession", "methodName" => "commit")));
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				$tmp = ufront_core_SurpriseTools::success();
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$tmp6 = tink_core_Outcome::Success(tink_core_Noise::$Noise);
		{
			$tmp = tink_core__Future_Future_Impl_::sync($tmp6);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_4(&$_gthis, $_1) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit@260");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp8 = null;
		if($_gthis->commitFlag) {
			$tmp8 = $_gthis->sessionData !== null;
		} else {
			$tmp8 = false;
		}
		if($tmp8) {
			$f = tink_core__Future_Future_Impl_::sync($_gthis->sessionData);
			$s = $_gthis->cache->set($_gthis->sessionID, $f);
			$tmp9 = ufront_core_SurpriseTools::changeSuccessTo($s, tink_core_Noise::$Noise);
			{
				$tmp = ufront_core_SurpriseTools::changeFailureToError($tmp9, null, _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 262, "className" => "ufront.web.session.CacheSession", "methodName" => "commit")));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$tmp10 = tink_core_Outcome::Success(tink_core_Noise::$Noise);
		{
			$tmp = tink_core__Future_Future_Impl_::sync($tmp10);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_5(&$_gthis, $_2) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit@266");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp12 = null;
		if($_gthis->expiryFlag) {
			$tmp12 = !$_gthis->closeFlag;
		} else {
			$tmp12 = false;
		}
		if($tmp12) {
			$_gthis->setCookie($_gthis->sessionID, $_gthis->expiry);
		}
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_6(&$_gthis, $_3) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::commit@272");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp13 = $_gthis->closeFlag;
		if($tmp13) {
			$_gthis->setCookie("", -1);
			$tmp14 = $_gthis->cache->remove($_gthis->sessionID);
			{
				$tmp = ufront_core_SurpriseTools::changeFailureToError($tmp14, null, _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 275, "className" => "ufront.web.session.CacheSession", "methodName" => "commit")));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$tmp15 = tink_core_Outcome::Success(tink_core_Noise::$Noise);
		{
			$tmp = tink_core__Future_Future_Impl_::sync($tmp15);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_7(&$_gthis, &$tryID, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::findNewSessionID@284");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp1 = $outcome->index;
		switch($tmp1) {
		case 0:{
			$tmp = $_gthis->findNewSessionID();
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$tmp2 = _hx_deref($outcome)->params[0]->index === 0;
			if($tmp2) {
				$_gthis->setCookie($tryID, $_gthis->expiry);
				$v = new haxe_ds_StringMap();
				$f = tink_core__Future_Future_Impl_::sync($v);
				$tmp3 = $_gthis->cache->set($tryID, $f);
				{
					$tmp = tink_core__Future_Future_Impl_::map($tmp3, array(new _hx_lambda(array(&$tryID), "ufront_web_session_CacheSession_8"), 'execute'), null);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else {
				$tmp6 = tink_core_TypedError::withData(null, "Failed to find new session ID, cache error", _hx_deref($outcome)->params[0], _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 297, "className" => "ufront.web.session.CacheSession", "methodName" => "findNewSessionID")));
				$tmp7 = tink_core_Outcome::Failure($tmp6);
				{
					$tmp = tink_core__Future_Future_Impl_::sync($tmp7);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_CacheSession_8(&$tryID, $outcome1) {
	{
		$GLOBALS['%s']->push("ufront.web.session.CacheSession::isValidID@292");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp4 = $outcome1->index;
		switch($tmp4) {
		case 0:{
			$tmp = tink_core_Outcome::Success($tryID);
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$tmp5 = tink_core_TypedError::withData(null, "Failed to reserve session ID " . _hx_string_or_null($tryID), _hx_deref($outcome1)->params[0], _hx_anonymous(array("fileName" => "CacheSession.hx", "lineNumber" => 294, "className" => "ufront.web.session.CacheSession", "methodName" => "findNewSessionID")));
			{
				$tmp = tink_core_Outcome::Failure($tmp5);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
