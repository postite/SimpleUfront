<?php

// Generated by Haxe 3.3.0
class sys_io_FileOutput extends haxe_io_Output {
	public function __construct($f) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("sys.io.FileOutput::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->__f = $f;
		$GLOBALS['%s']->pop();
	}}
	public $__f;
	public function writeByte($c) {
		$GLOBALS['%s']->push("sys.io.FileOutput::writeByte");
		$__hx__spos = $GLOBALS['%s']->length;
		$r = fwrite($this->__f, chr($c));
		$tmp = ($r === false);
		if($tmp) {
			throw new HException(haxe_io_Error::Custom("An error occurred"));
		}
		$GLOBALS['%s']->pop();
	}
	public function writeBytes($b, $p, $l) {
		$GLOBALS['%s']->push("sys.io.FileOutput::writeBytes");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = $b->getString($p, $l);
		$tmp = feof($this->__f);
		if($tmp) {
			throw new HException(new haxe_io_Eof());
		}
		$r = fwrite($this->__f, $s, $l);
		$tmp1 = ($r === false);
		if($tmp1) {
			throw new HException(haxe_io_Error::Custom("An error occurred"));
		}
		{
			$GLOBALS['%s']->pop();
			return $r;
		}
		$GLOBALS['%s']->pop();
	}
	public function flush() {
		$GLOBALS['%s']->push("sys.io.FileOutput::flush");
		$__hx__spos = $GLOBALS['%s']->length;
		$r = fflush($this->__f);
		$tmp = ($r === false);
		if($tmp) {
			throw new HException(haxe_io_Error::Custom("An error occurred"));
		}
		$GLOBALS['%s']->pop();
	}
	public function close() {
		$GLOBALS['%s']->push("sys.io.FileOutput::close");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::close();
		if($this->__f !== null) {
			fclose($this->__f);
		}
		$GLOBALS['%s']->pop();
	}
	public function seek($p, $pos) {
		$GLOBALS['%s']->push("sys.io.FileOutput::seek");
		$__hx__spos = $GLOBALS['%s']->length;
		$w = null;
		$tmp = $pos->index;
		switch($tmp) {
		case 0:{
			$w = SEEK_SET;
		}break;
		case 1:{
			$w = SEEK_CUR;
		}break;
		case 2:{
			$w = SEEK_END;
		}break;
		}
		$r = fseek($this->__f, $p, $w);
		$tmp1 = ($r === false);
		if($tmp1) {
			throw new HException(haxe_io_Error::Custom("An error occurred"));
		}
		$GLOBALS['%s']->pop();
	}
	public function tell() {
		$GLOBALS['%s']->push("sys.io.FileOutput::tell");
		$__hx__spos = $GLOBALS['%s']->length;
		$r = ftell($this->__f);
		$tmp = ($r === false);
		if($tmp) {
			throw new HException(haxe_io_Error::Custom("An error occurred"));
		}
		{
			$tmp2 = $r;
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
	static $__properties__ = array("set_bigEndian" => "set_bigEndian");
	function __toString() { return 'sys.io.FileOutput'; }
}
