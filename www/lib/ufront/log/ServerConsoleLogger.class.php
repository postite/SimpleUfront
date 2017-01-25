<?php

// Generated by Haxe 3.3.0
class ufront_log_ServerConsoleLogger implements ufront_app_UFLogHandler{
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.log.ServerConsoleLogger::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}}
	public function log($ctx, $appMessages) {
		$GLOBALS['%s']->push("ufront.log.ServerConsoleLogger::log");
		$__hx__spos = $GLOBALS['%s']->length;
		$messages = (new _hx_array(array()));
		$userDetails = $ctx->request->get_clientIP();
		try {
			$tmp = null;
			if(null !== $ctx->session) {
				$tmp = $ctx->session->get_id();
			} else {
				$tmp = null;
			}
			if($tmp !== null) {
				$tmp1 = null;
				if(null !== $ctx->session) {
					$tmp1 = $ctx->session->get_id();
				} else {
					$tmp1 = null;
				}
				$userDetails .= " " . _hx_string_or_null($tmp1);
			}
			$tmp2 = null;
			$tmp3 = null;
			if($ctx->auth !== null) {
				$tmp4 = $ctx->auth->get_currentUser();
				$tmp3 = $tmp4 !== null;
			} else {
				$tmp3 = false;
			}
			if($tmp3) {
				$tmp2 = $ctx->auth->get_currentUser()->get_userID();
			} else {
				$tmp2 = null;
			}
			if($tmp2 !== null) {
				$tmp5 = null;
				$tmp6 = null;
				if($ctx->auth !== null) {
					$tmp7 = $ctx->auth->get_currentUser();
					$tmp6 = $tmp7 !== null;
				} else {
					$tmp6 = false;
				}
				if($tmp6) {
					$tmp5 = $ctx->auth->get_currentUser()->get_userID();
				} else {
					$tmp5 = null;
				}
				$userDetails .= " " . _hx_string_or_null($tmp5);
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
			}
		}
		$tmp8 = $ctx->request->get_httpMethod();
		$tmp9 = "[" . _hx_string_or_null($tmp8) . " ";
		$tmp10 = $ctx->request->get_uri();
		$tmp11 = _hx_string_or_null($tmp9) . _hx_string_or_null($tmp10) . "] from [" . _hx_string_or_null($userDetails) . "], response: [" . _hx_string_rec($ctx->response->status, "") . " ";
		$tmp12 = $ctx->response->get_contentType();
		$messages->push(_hx_string_or_null($tmp11) . _hx_string_or_null($tmp12) . "]");
		{
			$_g = 0;
			$_g1 = $ctx->messages;
			while($_g < $_g1->length) {
				$msg = $_g1[$_g];
				++$_g;
				$tmp13 = ufront_log_ServerConsoleLogger::formatMsg($msg);
				$messages->push($tmp13);
				unset($tmp13,$msg);
			}
		}
		if($appMessages !== null) {
			$_g2 = 0;
			while($_g2 < $appMessages->length) {
				$msg1 = $appMessages[$_g2];
				++$_g2;
				$tmp14 = ufront_log_ServerConsoleLogger::formatMsg($msg1);
				$messages->push($tmp14);
				unset($tmp14,$msg1);
			}
		}
		$tmp15 = $messages->join("\x0A  ");
		ufront_log_ServerConsoleLogger::writeLog($tmp15, null);
		{
			$tmp = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function formatMsg($m) {
		$GLOBALS['%s']->push("ufront.log.ServerConsoleLogger::formatMsg");
		$__hx__spos = $GLOBALS['%s']->length;
		$extras = null;
		$tmp = null;
		if(_hx_field($m, "pos") !== null) {
			$tmp = $m->pos->customParams !== null;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp1 = $m->pos->customParams->join(", ");
			$extras = ", " . _hx_string_or_null($tmp1);
		} else {
			$extras = "";
		}
		$type = _hx_substr(Type::enumConstructor($m->type), 1, null);
		$tmp2 = "" . _hx_string_or_null($type) . ": " . _hx_string_or_null($m->pos->className) . "." . _hx_string_or_null($m->pos->methodName) . "(" . _hx_string_rec($m->pos->lineNumber, "") . "): ";
		$tmp3 = Std::string($m->msg);
		{
			$tmp4 = _hx_string_or_null($tmp2) . _hx_string_or_null($tmp3) . _hx_string_or_null($extras);
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	static function writeLog($message, $type = null) {
		$GLOBALS['%s']->push("ufront.log.ServerConsoleLogger::writeLog");
		$__hx__spos = $GLOBALS['%s']->length;
		error_log($message);
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.log.ServerConsoleLogger'; }
}
