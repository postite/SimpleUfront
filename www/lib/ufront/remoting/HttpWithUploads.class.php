<?php

// Generated by Haxe 3.3.0
class ufront_remoting_HttpWithUploads {
	public function __construct($url, $async, $timeout = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->h = new haxe_Http($url);
		if($async === false) {
			if($timeout !== null) {
				$this->h->cnxTimeout = $timeout;
			}
		}
		$this->async = $async;
		$GLOBALS['%s']->pop();
	}}
	public $h;
	public $async;
	public function setHeader($k, $v) {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::setHeader");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->h->setHeader($k, $v);
		$GLOBALS['%s']->pop();
	}
	public function setParam($k, $v) {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::setParam");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->h->setParameter($k, $v);
		$GLOBALS['%s']->pop();
	}
	public function attachUploads($uploads) {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::attachUploads");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$allUploadsReady = (new _hx_array(array()));
		$failedUploads = (new _hx_array(array()));
		{
			$tmp = $uploads->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$postName = $tmp->next();
				$_g = 0;
				$_g1 = ufront_core__MultiValueMap_MultiValueMap_Impl_::getAll($uploads, $postName);
				while($_g < $_g1->length) {
					$upload = $_g1[$_g];
					++$_g;
					$finished = false;
					$tmp2 = $upload->getBytes();
					$surprise = tink_core__Future_Future_Impl_::map($tmp2, array(new _hx_lambda(array(&$_gthis, &$failedUploads, &$finished, &$postName, &$upload), "ufront_remoting_HttpWithUploads_0"), 'execute'), null);
					$tmp4 = null;
					if($this->async === false) {
						$tmp4 = !$finished;
					} else {
						$tmp4 = false;
					}
					if($tmp4) {
						throw new HException("upload.getBytes() resolved asynchronously, and was not ready in time for the synchronous HttpConnection remoting call");
					}
					$allUploadsReady->push($surprise);
					unset($upload,$tmp4,$tmp2,$surprise,$finished);
				}
				unset($tmp1,$postName,$_g1,$_g);
			}
		}
		$tmp5 = tink_core__Future_Future_Impl_::ofMany($allUploadsReady, null);
		{
			$tmp = tink_core__Future_Future_Impl_::map($tmp5, array(new _hx_lambda(array(&$failedUploads), "ufront_remoting_HttpWithUploads_1"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function send() {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::send");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->h->request(true);
		$GLOBALS['%s']->pop();
	}
	public function responseData() {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::responseData");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->h->responseData;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function handle($onStatus, $onData, $onError) {
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::handle");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->h->onStatus = $onStatus;
		$this->h->onData = $onData;
		$this->h->onError = $onError;
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
	function __toString() { return 'ufront.remoting.HttpWithUploads'; }
}
function ufront_remoting_HttpWithUploads_0(&$_gthis, &$failedUploads, &$finished, &$postName, &$upload, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::attachUploads@84");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp3 = $outcome->index;
		switch($tmp3) {
		case 0:{
			$bytesInput = new haxe_io_BytesInput(_hx_deref($outcome)->params[0], null, null);
			$_gthis->h->fileTransfer($postName, $upload->originalFileName, $bytesInput, $upload->size, $upload->contentType);
			$finished = true;
		}break;
		case 1:{
			$failedUploads->push(_hx_deref($outcome)->params[0]);
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_remoting_HttpWithUploads_1(&$failedUploads, $_) {
	{
		$GLOBALS['%s']->push("ufront.remoting.HttpWithUploads::attachUploads@99");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp6 = $failedUploads->length === 0;
		if($tmp6) {
			$tmp = tink_core_Outcome::Success(tink_core_Noise::$Noise);
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$tmp7 = Std::string($failedUploads);
			{
				$tmp = tink_core_Outcome::Failure(new tink_core_TypedError(null, "Failed to read attachments: " . _hx_string_or_null($tmp7), _hx_anonymous(array("fileName" => "HttpWithUploads.hx", "lineNumber" => 102, "className" => "ufront.remoting.HttpWithUploads", "methodName" => "attachUploads"))));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}
		$GLOBALS['%s']->pop();
	}
}
