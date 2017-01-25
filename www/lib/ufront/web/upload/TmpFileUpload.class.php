<?php

// Generated by Haxe 3.3.0
class ufront_web_upload_TmpFileUpload extends ufront_web_upload_BaseUpload implements ufront_web_upload_UFFileUpload{
	public function __construct($tmpFileName, $postName, $originalFileName, $size, $contentType = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = haxe_io_Path::withoutDirectory($originalFileName);
		parent::__construct($postName,$tmp,$size,$contentType);
		$this->tmpFileName = $tmpFileName;
		$GLOBALS['%s']->pop();
	}}
	public $tmpFileName;
	public function getBytes() {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::getBytes");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->attachedUpload !== null) {
			$tmp = $this->attachedUpload->getBytes();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		try {
			$tmp = sys_io_File::getBytes($this->tmpFileName);
			$data = tink_core_Outcome::Success($tmp);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($data);
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
				$tmp1 = ufront_web_HttpError::wrap($e, "Error during TmpFileUpload.getBytes()", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 49, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "getBytes")));
				$data1 = tink_core_Outcome::Failure($tmp1);
				{
					$tmp = tink_core__Future_Future_Impl_::sync($data1);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function getString($encoding = null) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::getString");
		$__hx__spos = $GLOBALS['%s']->length;
		if($encoding === null) {
			$encoding = "UTF-8";
		}
		if($this->attachedUpload !== null) {
			$tmp = $this->attachedUpload->getString($encoding);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		try {
			$tmp = sys_io_File::getContent($this->tmpFileName);
			$data = tink_core_Outcome::Success($tmp);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($data);
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
				$tmp1 = ufront_web_HttpError::wrap($e, "Error during TmpFileUpload.getString()", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 67, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "getString")));
				$data1 = tink_core_Outcome::Failure($tmp1);
				{
					$tmp = tink_core__Future_Future_Impl_::sync($data1);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function writeToFile($newFilePath) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::writeToFile");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->attachedUpload !== null) {
			$tmp = $this->attachedUpload->writeToFile($newFilePath);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		try {
			$directory = haxe_io_Path::directory($newFilePath);
			$tmp = !file_exists($directory);
			if($tmp) {
				$path = haxe_io_Path::addTrailingSlash($directory);
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
			sys_io_File::copy($this->tmpFileName, $newFilePath);
			{
				$tmp2 = ufront_core_SurpriseTools::success();
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
				$tmp4 = ufront_web_HttpError::wrap($e, "Error during TmpFileUpload.writeToFile()", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 87, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "writeToFile")));
				$data = tink_core_Outcome::Failure($tmp4);
				{
					$tmp = tink_core__Future_Future_Impl_::sync($data);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function process($onData, $partSize = null) {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::process");
		$__hx__spos = $GLOBALS['%s']->length;
		if($this->attachedUpload !== null) {
			$tmp = $this->attachedUpload->process($onData, $partSize);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		try {
			$tmp = $partSize === null;
			if($tmp) {
				$partSize = 8192;
			}
			$doneTrigger = new tink_core_FutureTrigger();
			$fh = sys_io_File::read($this->tmpFileName, null);
			$pos = 0;
			$readNext = null;
			$readNext = array(new _hx_lambda(array(&$doneTrigger, &$fh, &$onData, &$partSize, &$pos, &$readNext), "ufront_web_upload_TmpFileUpload_0"), 'execute');
			call_user_func($readNext);
			{
				$tmp2 = (isset($doneTrigger->future) ? $doneTrigger->future: array($doneTrigger, "future"));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e2 = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$tmp3 = ufront_web_HttpError::wrap($e2, "Error during TmpFileUpload.process()", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 152, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "process")));
				$data1 = tink_core_Outcome::Failure($tmp3);
				{
					$tmp = tink_core__Future_Future_Impl_::sync($data1);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}
		$GLOBALS['%s']->pop();
	}
	public function deleteTemporaryFile() {
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::deleteTemporaryFile");
		$__hx__spos = $GLOBALS['%s']->length;
		try {
			@unlink($this->tmpFileName);
			{
				$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
				$GLOBALS['%s']->pop();
				return $tmp;
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
				$tmp = ufront_web_HttpError::wrap($e, "Error during TmpFileUpload.deleteTmpFile()", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 169, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "deleteTemporaryFile")));
				{
					$tmp2 = tink_core_Outcome::Failure($tmp);
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			}
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
	function __toString() { return 'ufront.web.upload.TmpFileUpload'; }
}
function ufront_web_upload_TmpFileUpload_0(&$doneTrigger, &$fh, &$onData, &$partSize, &$pos, &$readNext) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::process@119");
		$__hx__spos = $GLOBALS['%s']->length;
		$final = false;
		$surprise = null;
		try {
			$bytes = $fh->read($partSize);
			$surprise = call_user_func_array($onData, array($bytes, $pos, $bytes->length));
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			if(($e = $_ex_) instanceof haxe_io_Eof){
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$final = true;
				$bytes1 = $fh->readAll($partSize);
				$surprise = call_user_func_array($onData, array($bytes1, $pos, $bytes1->length));
			}
			else { $e1 = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$tmp1 = ufront_web_HttpError::wrap($e1, "Error during TmpFileUpload.process", _hx_anonymous(array("fileName" => "TmpFileUpload.hx", "lineNumber" => 132, "className" => "ufront.web.upload.TmpFileUpload", "methodName" => "process")));
				$data = tink_core_Outcome::Failure($tmp1);
				$surprise = tink_core__Future_Future_Impl_::sync($data);
			}}
		}
		$surprise(array(new _hx_lambda(array(&$doneTrigger, &$final, &$partSize, &$pos, &$readNext), "ufront_web_upload_TmpFileUpload_1"), 'execute'));
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_upload_TmpFileUpload_1(&$doneTrigger, &$final, &$partSize, &$pos, &$readNext, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.upload.TmpFileUpload::deleteTemporaryFile@134");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = $outcome->index;
		switch($tmp2) {
		case 0:{
			if($final === false) {
				$pos += $partSize;
				call_user_func($readNext);
			} else {
				$result = tink_core_Outcome::Success(tink_core_Noise::$Noise);
				if($doneTrigger->{"list"} !== null) {
					$list = $doneTrigger->{"list"};
					$doneTrigger->{"list"} = null;
					$doneTrigger->result = $result;
					tink_core__Callback_CallbackList_Impl_::invoke($list, $result);
					tink_core__Callback_CallbackList_Impl_::clear($list);
				}
			}
		}break;
		case 1:{
			$result1 = tink_core_Outcome::Failure(_hx_deref($outcome)->params[0]);
			if($doneTrigger->{"list"} !== null) {
				$list1 = $doneTrigger->{"list"};
				$doneTrigger->{"list"} = null;
				$doneTrigger->result = $result1;
				tink_core__Callback_CallbackList_Impl_::invoke($list1, $result1);
				tink_core__Callback_CallbackList_Impl_::clear($list1);
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}