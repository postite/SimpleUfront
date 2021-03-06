<?php

// Generated by Haxe 3.3.0
class ufront_web_Controller {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.Controller::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}}
	public $context;
	public $baseUri;
	public function injectContext($context) {
		$GLOBALS['%s']->push("ufront.web.Controller::injectContext");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->context = $context;
		$uriPartsBeforeRouting = $context->actionContext->get_uriParts();
		$tmp = $uriPartsBeforeRouting->join("/");
		$remainingUri = haxe_io_Path::addTrailingSlash($tmp);
		$tmp1 = $context->getRequestUri();
		$fullUri = haxe_io_Path::addTrailingSlash($tmp1);
		$tmp2 = strlen($fullUri) - strlen($remainingUri);
		$tmp3 = _hx_substr($fullUri, 0, $tmp2);
		$tmp4 = haxe_io_Path::addTrailingSlash($tmp3);
		$this->baseUri = "~" . _hx_string_or_null($tmp4);
		$GLOBALS['%s']->pop();
	}
	public function execute() {
		$GLOBALS['%s']->push("ufront.web.Controller::execute");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->toString();
		$tmp1 = ufront_web_HttpError::internalServerError("Field execute() in ufront.web.Controller is an abstract method, please override it in " . _hx_string_or_null($tmp) . " ", null, _hx_anonymous(array("fileName" => "Controller.hx", "lineNumber" => 219, "className" => "ufront.web.Controller", "methodName" => "execute")));
		$tmp2 = tink_core_Outcome::Failure($tmp1);
		{
			$tmp3 = tink_core__Future_Future_Impl_::sync($tmp2);
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$GLOBALS['%s']->pop();
	}
	public function executeSubController($controller) {
		$GLOBALS['%s']->push("ufront.web.Controller::executeSubController");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->context->injector->_instantiate($controller)->execute();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function toString() {
		$GLOBALS['%s']->push("ufront.web.Controller::toString");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = Type::getClass($this);
		{
			$tmp2 = Type::getClassName($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function ufTrace($msg, $pos = null) {
		$GLOBALS['%s']->push("ufront.web.Controller::ufTrace");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->context !== null) {
			$this->context->messages->push(_hx_anonymous(array("msg" => $msg, "pos" => $pos, "type" => ufront_log_MessageType::$MTrace)));
		} else {
			$tmp = Std::string($msg);
			haxe_Log::trace("" . _hx_string_or_null($tmp), $pos);
		}
		$GLOBALS['%s']->pop();
	}
	public function ufLog($msg, $pos = null) {
		$GLOBALS['%s']->push("ufront.web.Controller::ufLog");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->context !== null) {
			$this->context->messages->push(_hx_anonymous(array("msg" => $msg, "pos" => $pos, "type" => ufront_log_MessageType::$MLog)));
		} else {
			$tmp = Std::string($msg);
			haxe_Log::trace("Log: " . _hx_string_or_null($tmp), $pos);
		}
		$GLOBALS['%s']->pop();
	}
	public function ufWarn($msg, $pos = null) {
		$GLOBALS['%s']->push("ufront.web.Controller::ufWarn");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->context !== null) {
			$this->context->messages->push(_hx_anonymous(array("msg" => $msg, "pos" => $pos, "type" => ufront_log_MessageType::$MWarning)));
		} else {
			$tmp = Std::string($msg);
			haxe_Log::trace("Warning: " . _hx_string_or_null($tmp), $pos);
		}
		$GLOBALS['%s']->pop();
	}
	public function ufError($msg, $pos = null) {
		$GLOBALS['%s']->push("ufront.web.Controller::ufError");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->context !== null) {
			$this->context->messages->push(_hx_anonymous(array("msg" => $msg, "pos" => $pos, "type" => ufront_log_MessageType::$MError)));
		} else {
			$tmp = Std::string($msg);
			haxe_Log::trace("Error: " . _hx_string_or_null($tmp), $pos);
		}
		$GLOBALS['%s']->pop();
	}
	public function wrapResult($result, $wrappingRequired) {
		$GLOBALS['%s']->push("ufront.web.Controller::wrapResult");
		$__hx__spos = $GLOBALS['%s']->length;
		if($result === null) {
			$actionResult = new ufront_web_result_EmptyResult(true);
			$tmp = tink_core_Outcome::Success($actionResult);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($tmp);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$future = null;
			$tmp1 = $wrappingRequired & 1 << ufront_web_result_ResultWrapRequired::$WRFuture->index;
			if($tmp1 !== 0) {
				$future = $this->wrapInFuture($result);
			} else {
				$future = $result;
			}
			$surprise = null;
			$tmp2 = $wrappingRequired & 1 << ufront_web_result_ResultWrapRequired::$WROutcome->index;
			if($tmp2 !== 0) {
				$surprise = $this->wrapInOutcome($future);
			} else {
				$surprise = $future;
			}
			$finalResult = null;
			$tmp3 = $wrappingRequired & 1 << ufront_web_result_ResultWrapRequired::$WRResultOrError->index;
			if($tmp3 !== 0) {
				$finalResult = $this->wrapResultOrError($surprise);
			} else {
				$finalResult = $surprise;
			}
			{
				$GLOBALS['%s']->pop();
				return $finalResult;
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function wrapInFuture($result) {
		$GLOBALS['%s']->push("ufront.web.Controller::wrapInFuture");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::sync($result);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function wrapInOutcome($future) {
		$GLOBALS['%s']->push("ufront.web.Controller::wrapInOutcome");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($future, array(new _hx_lambda(array(), "ufront_web_Controller_0"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function wrapResultOrError($surprise) {
		$GLOBALS['%s']->push("ufront.web.Controller::wrapResultOrError");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($surprise, array(new _hx_lambda(array(), "ufront_web_Controller_1"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setContextActionResultWhenFinished($result) {
		$GLOBALS['%s']->push("ufront.web.Controller::setContextActionResultWhenFinished");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$result(array(new _hx_lambda(array(&$_gthis), "ufront_web_Controller_2"), 'execute'));
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
	function __toString() { return $this->toString(); }
}
ufront_web_Controller::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("rtti" => (new _hx_array(array((new _hx_array(array("injectContext", "", "ufront.web.context.HttpContext", "", ""))))))))));
function ufront_web_Controller_0($result) {
	{
		$GLOBALS['%s']->push("ufront.web.Controller::wrapInOutcome@300");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core_Outcome::Success($result);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_Controller_1($outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.Controller::wrapResultOrError@306");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $outcome->index;
		switch($tmp) {
		case 0:{
			$tmp1 = ufront_web_result_ActionResult::wrap(_hx_deref($outcome)->params[0]);
			{
				$tmp2 = tink_core_Outcome::Success($tmp1);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		case 1:{
			$tmp2 = ufront_web_HttpError::wrap(_hx_deref($outcome)->params[0], null, _hx_anonymous(array("fileName" => "Controller.hx", "lineNumber" => 308, "className" => "ufront.web.Controller", "methodName" => "wrapResultOrError")));
			{
				$tmp3 = tink_core_Outcome::Failure($tmp2);
				$GLOBALS['%s']->pop();
				return $tmp3;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_Controller_2(&$_gthis, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.Controller::setContextActionResultWhenFinished@315");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $outcome->index === 0;
		if($tmp) {
			$_gthis->context->actionContext->actionResult = _hx_deref($outcome)->params[0];
		}
		$GLOBALS['%s']->pop();
	}
}
