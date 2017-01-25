<?php

// Generated by Haxe 3.3.0
class ufront_web_result_CallJavascriptResult extends ufront_web_result_ActionResult implements ufront_web_result_WrappedResult{
	public function __construct($originalResult) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->originalResult = $originalResult;
		$this->scripts = (new _hx_array(array()));
		$GLOBALS['%s']->pop();
	}}
	public $originalResult;
	public $scripts;
	public function addInlineJs($js) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::addInlineJs");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->scripts->push("<script type=\"text/javascript\">" . _hx_string_or_null($js) . "</script>");
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addJsScript($path) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::addJsScript");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->scripts->push("<script type=\"text/javascript\" src=\"" . _hx_string_or_null($path) . "\"></script>");
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function executeResult($actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::executeResult");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$tmp = $this->originalResult->executeResult($actionContext);
		{
			$tmp2 = tink_core__Future_Future_Impl_::_tryMap($tmp, array(new _hx_lambda(array(&$_gthis, &$actionContext), "ufront_web_result_CallJavascriptResult_0"), 'execute'));
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
	static function addInlineJsToResult($originalResult, $js) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::addInlineJsToResult");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_deref(new ufront_web_result_CallJavascriptResult($originalResult))->addInlineJs($js);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function addJsScriptToResult($originalResult, $path) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::addJsScriptToResult");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_deref(new ufront_web_result_CallJavascriptResult($originalResult))->addJsScript($path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function executeScripts($response, $scripts) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::executeScripts");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $response->getBuffer();
		$newContent = ufront_web_result_CallJavascriptResult::insertScriptsBeforeBodyTag($tmp, $scripts);
		$response->clearContent();
		$response->write($newContent);
		$GLOBALS['%s']->pop();
	}
	static function insertScriptsBeforeBodyTag($content, $scripts) {
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::insertScriptsBeforeBodyTag");
		$__hx__spos = $GLOBALS['%s']->length;
		$script = $scripts->join("");
		$bodyCloseIndex = _hx_last_index_of($content, "</body>", null);
		if($bodyCloseIndex === -1) {
			$content .= _hx_string_or_null($script);
		} else {
			$tmp = _hx_substring($content, 0, $bodyCloseIndex);
			$tmp1 = _hx_string_or_null($tmp) . _hx_string_or_null($script);
			$tmp2 = _hx_substr($content, $bodyCloseIndex, null);
			$content = _hx_string_or_null($tmp1) . _hx_string_or_null($tmp2);
		}
		{
			$GLOBALS['%s']->pop();
			return $content;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.web.result.CallJavascriptResult'; }
}
function ufront_web_result_CallJavascriptResult_0(&$_gthis, &$actionContext, $n) {
	{
		$GLOBALS['%s']->push("ufront.web.result.CallJavascriptResult::executeResult@77");
		$__hx__spos = $GLOBALS['%s']->length;
		$response = $actionContext->httpContext->response;
		$tmp1 = null;
		$tmp2 = $response->get_contentType();
		if($tmp2 === "text/html") {
			$tmp1 = $_gthis->scripts->length > 0;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			ufront_web_result_CallJavascriptResult::executeScripts($response, $_gthis->scripts);
		}
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
