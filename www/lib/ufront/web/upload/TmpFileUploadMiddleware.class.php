<?php

// Generated by Haxe 3.3.0
class ufront_web_upload_TmpFileUploadMiddleware implements ufront_app_UFMiddleware{
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}}
	public function requestIn($ctx) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::requestIn");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		$tmp1 = strtolower($ctx->request->get_httpMethod());
		if($tmp1 === "post") {
			$tmp = $ctx->request->isMultipart();
		} else {
			$tmp = false;
		}
		if($tmp) {
			$file = null;
			$postName = null;
			$origFileName = null;
			$size = 0;
			$tmpFilePath = null;
			$tmp2 = Date::now();
			$dateStr = DateTools::format($tmp2, "%Y%m%d-%H%M");
			$tmp3 = $ctx->get_contentDirectory();
			$tmp4 = haxe_io_Path::addTrailingSlash(ufront_web_upload_TmpFileUploadMiddleware::$subDir);
			$dir = _hx_string_or_null($tmp3) . _hx_string_or_null($tmp4);
			{
				$path = haxe_io_Path::removeTrailingSlashes($dir);
				$path1 = haxe_io_Path::addTrailingSlash($path);
				$_p = null;
				$parts = (new _hx_array(array()));
				while(true) {
					$_p = haxe_io_Path::directory($path1);
					if(!($path1 !== $_p)) {
						break;
					}
					$parts->unshift($path1);
					$path1 = $_p;
				}
				{
					$_g = 0;
					while($_g < $parts->length) {
						$part = $parts[$_g];
						++$_g;
						$tmp5 = null;
						$tmp6 = strlen($part) - 1;
						$tmp7 = _hx_char_code_at($part, $tmp6);
						if($tmp7 !== 58) {
							$tmp5 = !file_exists($part);
						} else {
							$tmp5 = false;
						}
						if($tmp5) {
							@mkdir($part, 493);
						}
						unset($tmp7,$tmp6,$tmp5,$part);
					}
				}
			}
			$onPart = array(new _hx_lambda(array(&$dateStr, &$dir, &$file, &$origFileName, &$postName, &$size, &$tmpFilePath), "ufront_web_upload_TmpFileUploadMiddleware_0"), 'execute');
			$onData = array(new _hx_lambda(array(&$file, &$size), "ufront_web_upload_TmpFileUploadMiddleware_1"), 'execute');
			$onEndPart = array(new _hx_lambda(array(&$ctx, &$file, &$origFileName, &$postName, &$size, &$tmpFilePath), "ufront_web_upload_TmpFileUploadMiddleware_2"), 'execute');
			$tmp12 = $ctx->request->parseMultipart($onPart, $onData, $onEndPart);
			{
				$tmp5 = tink_core__Future_Future_Impl_::map($tmp12, array(new _hx_lambda(array(), "ufront_web_upload_TmpFileUploadMiddleware_3"), 'execute'), null);
				$GLOBALS['%s']->pop();
				return $tmp5;
			}
		} else {
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function responseOut($ctx) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::responseOut");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		$tmp1 = strtolower($ctx->request->get_httpMethod());
		if($tmp1 === "post") {
			$tmp = $ctx->request->isMultipart();
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp2 = $ctx->request->get_files();
			$tmp3 = ufront_core__MultiValueMap_MultiValueMap_Impl_::iterator($tmp2);
			while(true) {
				$tmp4 = !$tmp3->hasNext();
				if($tmp4) {
					break;
				}
				$f = $tmp3->next();
				$tmpFile = Std::instance($f, _hx_qtype("ufront.web.upload.TmpFileUpload"));
				if($tmpFile !== null) {
					$_g = $tmpFile->deleteTemporaryFile();
					$tmp5 = $_g->index === 1;
					if($tmp5) {
						$ctx->messages->push(_hx_anonymous(array("msg" => _hx_deref($_g)->params[0], "pos" => _hx_anonymous(array("fileName" => "TmpFileUploadMiddleware.hx", "lineNumber" => 125, "className" => "ufront.web.upload.TmpFileUploadMiddleware", "methodName" => "responseOut")), "type" => ufront_log_MessageType::$MError)));
					}
					unset($tmp5,$_g);
				}
				unset($tmpFile,$tmp4,$f);
			}
		}
		{
			$tmp2 = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static $subDir = "uf-upload-tmp";
	function __toString() { return 'ufront.web.upload.TmpFileUploadMiddleware'; }
}
function ufront_web_upload_TmpFileUploadMiddleware_0(&$dateStr, &$dir, &$file, &$origFileName, &$postName, &$size, &$tmpFilePath, $pName, $fName) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::requestIn@63");
		$__hx__spos = $GLOBALS['%s']->length;
		$postName = $pName;
		$origFileName = $fName;
		$size = 0;
		while($file === null) {
			$tmp8 = _hx_string_or_null($dir) . _hx_string_or_null($dateStr) . "-";
			$tmp9 = ufront_core_Uuid::create();
			$tmpFilePath = _hx_string_or_null($tmp8) . _hx_string_or_null($tmp9) . ".tmp";
			$tmp10 = !file_exists($tmpFilePath);
			if($tmp10) {
				$file = sys_io_File::write($tmpFilePath, null);
			}
			unset($tmp9,$tmp8,$tmp10);
		}
		{
			$tmp = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_upload_TmpFileUploadMiddleware_1(&$file, &$size, $bytes, $pos, $len) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::requestIn@76");
		$__hx__spos = $GLOBALS['%s']->length;
		$size += $len;
		$file->writeBytes($bytes, $pos, $len);
		{
			$tmp = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_upload_TmpFileUploadMiddleware_2(&$ctx, &$file, &$origFileName, &$postName, &$size, &$tmpFilePath) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::requestIn@82");
		$__hx__spos = $GLOBALS['%s']->length;
		if($file !== null) {
			$file->close();
			$file = null;
			$tmpFile = new ufront_web_upload_TmpFileUpload($tmpFilePath, $postName, $origFileName, $size, null);
			$tmp11 = $ctx->request->get_files();
			ufront_core__MultiValueMap_MultiValueMap_Impl_::add($tmp11, $postName, $tmpFile);
		}
		{
			$tmp = ufront_core_SurpriseTools::success();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_upload_TmpFileUploadMiddleware_3($result) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUploadMiddleware::requestIn@93");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp13 = $result->index;
		switch($tmp13) {
		case 0:{
			$tmp = tink_core_Outcome::Success(_hx_deref($result)->params[0]);
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$tmp14 = ufront_web_HttpError::wrap(_hx_deref($result)->params[0], null, _hx_anonymous(array("fileName" => "TmpFileUploadMiddleware.hx", "lineNumber" => 96, "className" => "ufront.web.upload.TmpFileUploadMiddleware", "methodName" => "requestIn")));
			{
				$tmp = tink_core_Outcome::Failure($tmp14);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
