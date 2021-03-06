<?php

// Generated by Haxe 3.3.0
class ufront_app_DefaultUfrontConfiguration {
	public function __construct(){}
	static function get() {
		$GLOBALS['%s']->push("ufront.app.DefaultUfrontConfiguration::get");
		$__hx__spos = $GLOBALS['%s']->length;
		$inlineSession = new ufront_web_session_InlineSessionMiddleware();
		$uploadMiddleware = new ufront_web_upload_TmpFileUploadMiddleware();
		$tmp = CompileTimeClassList::get("null,true,ufront.web.Controller");
		$tmp1 = CompileTimeClassList::get("null,true,ufront.api.UFApi");
		{
			$tmp2 = _hx_anonymous(array("indexController" => _hx_qtype("ufront.app.DefaultUfrontController"), "remotingApi" => null, "urlRewrite" => true, "basePath" => "/", "contentDirectory" => "../uf-content", "logFile" => null, "disableBrowserTrace" => false, "disableServerTrace" => false, "controllers" => $tmp, "apis" => $tmp1, "viewEngine" => _hx_qtype("ufront.view.FileViewEngine"), "templatingEngines" => ufront_view_TemplatingEngines::$all, "viewPath" => "view/", "defaultLayout" => null, "sessionImplementation" => _hx_qtype("ufront.web.session.FileSession"), "requestMiddleware" => (new _hx_array(array($uploadMiddleware, $inlineSession))), "responseMiddleware" => (new _hx_array(array($inlineSession, $uploadMiddleware))), "errorHandlers" => (new _hx_array(array(new ufront_web_ErrorPageHandler()))), "authImplementation" => _hx_qtype("ufront.auth.YesBossAuthHandler")));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.app.DefaultUfrontConfiguration'; }
}
