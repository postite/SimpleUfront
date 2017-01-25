<?php

// Generated by Haxe 3.3.0
class ufront_web_session_FileSession implements ufront_web_session_UFHttpSession{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->started = false;
		$this->commitFlag = false;
		$this->closeFlag = false;
		$this->regenerateFlag = false;
		$this->expiryFlag = false;
		$this->sessionData = null;
		$this->sessionID = null;
		$GLOBALS['%s']->pop();
	}}
	public $started;
	public $commitFlag;
	public $closeFlag;
	public $regenerateFlag;
	public $expiryFlag;
	public $sessionID;
	public $sessionData;
	public $context;
	public function injectConfig($context) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::injectConfig");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		$tmp1 = $context->injector->hasMappingForType("String", "sessionName");
		if($tmp1) {
			$tmp = $context->injector->getValueForType("String", "sessionName");
		} else {
			$tmp = ufront_web_session_FileSession::$defaultSessionName;
		}
		$this->sessionName = $tmp;
		$tmp2 = null;
		$tmp3 = $context->injector->hasMappingForType("Int", "sessionExpiry");
		if($tmp3) {
			$tmp2 = $context->injector->getValueForType("Int", "sessionExpiry");
		} else {
			$tmp2 = ufront_web_session_FileSession::$defaultExpiry;
		}
		$this->expiry = $tmp2;
		$tmp4 = null;
		$tmp5 = $context->injector->hasMappingForType("String", "sessionSavePath");
		if($tmp5) {
			$tmp4 = $context->injector->getValueForType("String", "sessionSavePath");
		} else {
			$tmp4 = ufront_web_session_FileSession::$defaultSavePath;
		}
		$this->savePath = $tmp4;
		$this->savePath = haxe_io_Path::addTrailingSlash($this->savePath);
		$tmp6 = !StringTools::startsWith($this->savePath, "/");
		if($tmp6) {
			$tmp7 = $context->get_contentDirectory();
			$this->savePath = _hx_string_or_null($tmp7) . _hx_string_or_null($this->savePath);
		}
		$GLOBALS['%s']->pop();
	}
	public $sessionName;
	public $expiry;
	public $savePath;
	public function setExpiry($e) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::setExpiry");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->expiry = $e;
		$GLOBALS['%s']->pop();
	}
	public function init() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::init");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$tmp = !$this->started;
		if($tmp) {
			$this->get_id();
			$this->sessionData = new haxe_ds_StringMap();
			$tmp1 = $this->doCreateSessionDirectory();
			$tmp2 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp1, (isset($this->doReadSessionFile) ? $this->doReadSessionFile: array($this, "doReadSessionFile")));
			$tmp3 = tink_core__Future_Future_Impl_::_tryMap($tmp2, (isset($this->doUnserializeSessionData) ? $this->doUnserializeSessionData: array($this, "doUnserializeSessionData")));
			{
				$tmp4 = tink_core__Future_Future_Impl_::_tryMap($tmp3, array(new _hx_lambda(array(&$_gthis), "ufront_web_session_FileSession_0"), 'execute'));
				$GLOBALS['%s']->pop();
				return $tmp4;
			}
		} else {
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function doCreateSessionDirectory() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doCreateSessionDirectory");
		$__hx__spos = $GLOBALS['%s']->length;
		$dir = haxe_io_Path::removeTrailingSlashes($this->savePath);
		{
			$tmp = ufront_core_SurpriseTools::tryCatchSurprise(array(new _hx_lambda(array(&$dir), "ufront_web_session_FileSession_1"), 'execute'), "Failed to create directory " . _hx_string_or_null($dir), _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 203, "className" => "ufront.web.session.FileSession", "methodName" => "doCreateSessionDirectory")));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function doReadSessionFile($_) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doReadSessionFile");
		$__hx__spos = $GLOBALS['%s']->length;
		$id = $this->sessionID;
		$tmp = null;
		if($id !== null) {
			$tmp = ufront_core_Uuid::isValid($id);
		} else {
			$tmp = false;
		}
		if($tmp) {
			try {
				$tmp1 = sys_io_File::getContent("" . _hx_string_or_null($this->savePath) . _hx_string_or_null($this->sessionID) . ".sess");
				{
					$tmp2 = ufront_core_SurpriseTools::asGoodSurprise($tmp1);
					$GLOBALS['%s']->pop();
					return $tmp2;
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
						$tmp2 = ufront_core_SurpriseTools::asGoodSurprise(null);
						$GLOBALS['%s']->pop();
						return $tmp2;
					}
				}
			}
		} else {
			$this->context->messages->push(_hx_anonymous(array("msg" => "Session ID " . _hx_string_or_null($this->sessionID) . " was invalid, resetting session.", "pos" => _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 243, "className" => "ufront.web.session.FileSession", "methodName" => "doReadSessionFile")), "type" => ufront_log_MessageType::$MWarning)));
			$this->sessionID = null;
			{
				$tmp2 = ufront_core_SurpriseTools::asGoodSurprise(null);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function doUnserializeSessionData($content) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doUnserializeSessionData");
		$__hx__spos = $GLOBALS['%s']->length;
		if($content !== null) {
			try {
				$this->sessionData = haxe_Unserializer::run($content);
			}catch(Exception $__hx__e) {
				$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
				$e = $_ex_;
				{
					$GLOBALS['%e'] = (new _hx_array(array()));
					while($GLOBALS['%s']->length >= $__hx__spos) {
						$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
					}
					$GLOBALS['%s']->push($GLOBALS['%e'][0]);
					$tmp = Std::string($e);
					$this->context->messages->push(_hx_anonymous(array("msg" => "Failed to unserialize session data: " . _hx_string_or_null($tmp), "pos" => _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 256, "className" => "ufront.web.session.FileSession", "methodName" => "doUnserializeSessionData")), "type" => ufront_log_MessageType::$MWarning)));
				}
			}
		}
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setCookie($id, $expiryLength) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::setCookie");
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
	public function commit() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::commit");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($this->sessionID === null) {
			$tmp = $this->sessionData !== null;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$this->regenerateID();
		}
		$tmp1 = $this->doRegenerateID();
		$tmp2 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp1, (isset($this->doSaveSessionContent) ? $this->doSaveSessionContent: array($this, "doSaveSessionContent")));
		$tmp3 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp2, (isset($this->doSetExpiry) ? $this->doSetExpiry: array($this, "doSetExpiry")));
		{
			$tmp4 = tink_core__Future_Future_Impl_::_tryFailingFlatMap($tmp3, (isset($this->doCloseSession) ? $this->doCloseSession: array($this, "doCloseSession")));
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	public function doRegenerateID() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doRegenerateID");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$tmp = $this->regenerateFlag;
		if($tmp) {
			$oldSessionID = $this->sessionID;
			{
				$tmp2 = ufront_core_SurpriseTools::tryCatchSurprise(array(new _hx_lambda(array(&$_gthis, &$oldSessionID), "ufront_web_session_FileSession_2"), 'execute'), null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 295, "className" => "ufront.web.session.FileSession", "methodName" => "doRegenerateID")));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function doSaveSessionContent($_) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doSaveSessionContent");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($this->commitFlag) {
			$tmp = $this->sessionData !== null;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$filePath = "" . _hx_string_or_null($this->savePath) . _hx_string_or_null($this->sessionID) . ".sess";
			$content = null;
			try {
				$content = haxe_Serializer::run($this->sessionData);
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
						$tmp2 = $e->asSurpriseError("Failed to serialize session content");
						$GLOBALS['%s']->pop();
						return $tmp2;
					}
				}
			}
			{
				$tmp2 = ufront_core_SurpriseTools::tryCatchSurprise(array(new _hx_lambda(array(&$content, &$filePath), "ufront_web_session_FileSession_3"), 'execute'), null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 351, "className" => "ufront.web.session.FileSession", "methodName" => "doSaveSessionContent")));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function doSetExpiry($_) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doSetExpiry");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->expiryFlag;
		if($tmp) {
			$this->setCookie($this->sessionID, $this->expiry);
		}
		{
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function doCloseSession($_) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doCloseSession");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->closeFlag;
		if($tmp) {
			$this->setCookie("", -1);
			$filename = "" . _hx_string_or_null($this->savePath) . _hx_string_or_null($this->sessionID) . ".sess";
			{
				$tmp2 = ufront_core_SurpriseTools::tryCatchSurprise(array(new _hx_lambda(array(&$filename), "ufront_web_session_FileSession_4"), 'execute'), null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 376, "className" => "ufront.web.session.FileSession", "methodName" => "doCloseSession")));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function get($name) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::get");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
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
		$GLOBALS['%s']->push("ufront.web.session.FileSession::set");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$this->sessionData->set($name, $value);
			$this->commitFlag = true;
		}
		$GLOBALS['%s']->pop();
	}
	public function exists($name) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::exists");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
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
		$GLOBALS['%s']->push("ufront.web.session.FileSession::remove");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
		}
		if($this->sessionData !== null) {
			$this->sessionData->remove($name);
			$this->commitFlag = true;
		}
		$GLOBALS['%s']->pop();
	}
	public function clear() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::clear");
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
		$GLOBALS['%s']->push("ufront.web.session.FileSession::triggerCommit");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->commitFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function regenerateID() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::regenerateID");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->regenerateFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function isActive() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::isActive");
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
		$GLOBALS['%s']->push("ufront.web.session.FileSession::isReady");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->started;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_id() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::get_id");
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
		$GLOBALS['%s']->push("ufront.web.session.FileSession::close");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
		}
		$this->sessionData = null;
		$this->closeFlag = true;
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::toString");
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
	public function getSessionFilePath($id) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::getSessionFilePath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = "" . _hx_string_or_null($this->savePath) . _hx_string_or_null($id) . ".sess";
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function generateSessionID() {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::generateSessionID");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core_Uuid::create();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function checkStarted($pos = null) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::checkStarted");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = !$this->started;
		if($tmp) {
			throw new HException(ufront_web_HttpError::internalServerError("Trying to access session data before init() has been run", null, _hx_anonymous(array("fileName" => "FileSession.hx", "lineNumber" => 509, "className" => "ufront.web.session.FileSession", "methodName" => "checkStarted"))));
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
	static $defaultSavePath = "sessions/";
	static $defaultExpiry = 0;
	static function testValidId($id) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::testValidId");
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
	static function notImplemented($p = null) {
		$GLOBALS['%s']->push("ufront.web.session.FileSession::notImplemented");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_core_SurpriseTools::asSurpriseError("FileSession is not implemented on this platform", null, $p);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_id" => "get_id");
	function __toString() { return $this->toString(); }
}
ufront_web_session_FileSession::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("rtti" => (new _hx_array(array((new _hx_array(array("context", "ufront.web.context.HttpContext", ""))), (new _hx_array(array("injectConfig", "", "ufront.web.context.HttpContext", "", ""))))))))));
function ufront_web_session_FileSession_0(&$_gthis, $n) {
	{
		$GLOBALS['%s']->push("ufront.web.session.FileSession::init@195");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis->started = true;
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_FileSession_1(&$dir) {
	{
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doCreateSessionDirectory@203");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = file_exists($dir);
		if($tmp === false) {
			$path = haxe_io_Path::addTrailingSlash($dir);
			$_p = null;
			$parts = (new _hx_array(array()));
			while(true) {
				$_p = haxe_io_Path::directory($path);
				if(!($path !== $_p)) {
					break;
				}
				$parts->unshift($path);
				$path = $_p;
			}
			{
				$_g = 0;
				while($_g < $parts->length) {
					$part = $parts[$_g];
					++$_g;
					$tmp1 = null;
					$tmp2 = strlen($part) - 1;
					$tmp3 = _hx_char_code_at($part, $tmp2);
					if($tmp3 !== 58) {
						$tmp1 = !file_exists($part);
					} else {
						$tmp1 = false;
					}
					if($tmp1) {
						@mkdir($part, 493);
					}
					unset($tmp3,$tmp2,$tmp1,$part);
				}
			}
		}
		{
			$tmp2 = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_FileSession_2(&$_gthis, &$oldSessionID) {
	{
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doRegenerateID@295");
		$__hx__spos = $GLOBALS['%s']->length;
		$file = null;
		while(true) {
			$_gthis->sessionID = ufront_core_Uuid::create();
			$file = "" . _hx_string_or_null($_gthis->savePath) . _hx_string_or_null($_gthis->sessionID) . ".sess";
			$tmp1 = !file_exists($file);
			if($tmp1) {
				break;
			}
			unset($tmp1);
		}
		$_gthis->setCookie($_gthis->sessionID, $_gthis->expiry);
		if($oldSessionID !== null) {
			$filePath = "" . _hx_string_or_null($_gthis->savePath) . _hx_string_or_null($oldSessionID) . ".sess";
			$tmp2 = file_exists($filePath);
			if($tmp2) {
				rename($filePath, $file);
				{
					$tmp = tink_core_Noise::$Noise;
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		sys_io_File::saveContent($file, "");
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_FileSession_3(&$content, &$filePath) {
	{
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doSaveSessionContent@351");
		$__hx__spos = $GLOBALS['%s']->length;
		sys_io_File::saveContent($filePath, $content);
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_session_FileSession_4(&$filename) {
	{
		$GLOBALS['%s']->push("ufront.web.session.FileSession::doCloseSession@376");
		$__hx__spos = $GLOBALS['%s']->length;
		@unlink($filename);
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
