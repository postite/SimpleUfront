<?php

// Generated by Haxe 3.3.0
class haxe_io_Output {
	public function __construct(){}
	public $bigEndian;
	public function writeByte($c) {
		$GLOBALS['%s']->push("haxe.io.Output::writeByte");
		$__hx__spos = $GLOBALS['%s']->length;
		throw new HException("Not implemented");
		$GLOBALS['%s']->pop();
	}
	public function writeBytes($s, $pos, $len) {
		$GLOBALS['%s']->push("haxe.io.Output::writeBytes");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		$tmp1 = null;
		if($pos >= 0) {
			$tmp1 = $len < 0;
		} else {
			$tmp1 = true;
		}
		if(!$tmp1) {
			$tmp = $pos + $len > $s->length;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$OutsideBounds);
		}
		$b = $s->b;
		$k = $len;
		while($k > 0) {
			$tmp2 = ord($b->s[$pos]);
			$this->writeByte($tmp2);
			++$pos;
			--$k;
			unset($tmp2);
		}
		{
			$GLOBALS['%s']->pop();
			return $len;
		}
		$GLOBALS['%s']->pop();
	}
	public function flush() {
		$GLOBALS['%s']->push("haxe.io.Output::flush");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function close() {
		$GLOBALS['%s']->push("haxe.io.Output::close");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function set_bigEndian($b) {
		$GLOBALS['%s']->push("haxe.io.Output::set_bigEndian");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->bigEndian = $b;
		{
			$GLOBALS['%s']->pop();
			return $b;
		}
		$GLOBALS['%s']->pop();
	}
	public function write($s) {
		$GLOBALS['%s']->push("haxe.io.Output::write");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = $s->length;
		$p = 0;
		while($l > 0) {
			$k = $this->writeBytes($s, $p, $l);
			if($k === 0) {
				throw new HException(haxe_io_Error::$Blocked);
			}
			$p += $k;
			$l -= $k;
			unset($k);
		}
		$GLOBALS['%s']->pop();
	}
	public function writeFullBytes($s, $pos, $len) {
		$GLOBALS['%s']->push("haxe.io.Output::writeFullBytes");
		$__hx__spos = $GLOBALS['%s']->length;
		while($len > 0) {
			$k = $this->writeBytes($s, $pos, $len);
			$pos += $k;
			$len -= $k;
			unset($k);
		}
		$GLOBALS['%s']->pop();
	}
	public function writeFloat($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeFloat");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = haxe_io_FPHelper::floatToI32($x);
		$this->writeInt32($tmp);
		$GLOBALS['%s']->pop();
	}
	public function writeDouble($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeDouble");
		$__hx__spos = $GLOBALS['%s']->length;
		$i64 = haxe_io_FPHelper::doubleToI64($x);
		$tmp = $this->bigEndian;
		if($tmp) {
			$this->writeInt32($i64->high);
			$this->writeInt32($i64->low);
		} else {
			$this->writeInt32($i64->low);
			$this->writeInt32($i64->high);
		}
		$GLOBALS['%s']->pop();
	}
	public function writeInt8($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeInt8");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($x >= -128) {
			$tmp = $x >= 128;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$Overflow);
		}
		$this->writeByte($x & 255);
		$GLOBALS['%s']->pop();
	}
	public function writeInt16($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeInt16");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($x >= -32768) {
			$tmp = $x >= 32768;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$Overflow);
		}
		$this->writeUInt16($x & 65535);
		$GLOBALS['%s']->pop();
	}
	public function writeUInt16($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeUInt16");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($x >= 0) {
			$tmp = $x >= 65536;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$Overflow);
		}
		$tmp1 = $this->bigEndian;
		if($tmp1) {
			$this->writeByte($x >> 8);
			$this->writeByte($x & 255);
		} else {
			$this->writeByte($x & 255);
			$this->writeByte($x >> 8);
		}
		$GLOBALS['%s']->pop();
	}
	public function writeInt24($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeInt24");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($x >= -8388608) {
			$tmp = $x >= 8388608;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$Overflow);
		}
		$this->writeUInt24($x & 16777215);
		$GLOBALS['%s']->pop();
	}
	public function writeUInt24($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeUInt24");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($x >= 0) {
			$tmp = $x >= 16777216;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException(haxe_io_Error::$Overflow);
		}
		$tmp1 = $this->bigEndian;
		if($tmp1) {
			$this->writeByte($x >> 16);
			$this->writeByte($x >> 8 & 255);
			$this->writeByte($x & 255);
		} else {
			$this->writeByte($x & 255);
			$this->writeByte($x >> 8 & 255);
			$this->writeByte($x >> 16);
		}
		$GLOBALS['%s']->pop();
	}
	public function writeInt32($x) {
		$GLOBALS['%s']->push("haxe.io.Output::writeInt32");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->bigEndian;
		if($tmp) {
			$this->writeByte(_hx_shift_right($x, 24));
			$this->writeByte($x >> 16 & 255);
			$this->writeByte($x >> 8 & 255);
			$this->writeByte($x & 255);
		} else {
			$this->writeByte($x & 255);
			$this->writeByte($x >> 8 & 255);
			$this->writeByte($x >> 16 & 255);
			$this->writeByte(_hx_shift_right($x, 24));
		}
		$GLOBALS['%s']->pop();
	}
	public function prepare($nbytes) {
		$GLOBALS['%s']->push("haxe.io.Output::prepare");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	public function writeInput($i, $bufsize = null) {
		$GLOBALS['%s']->push("haxe.io.Output::writeInput");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $bufsize === null;
		if($tmp) {
			$bufsize = 4096;
		}
		$buf = haxe_io_Bytes::alloc($bufsize);
		try {
			while(true) {
				$len = $i->readBytes($buf, 0, $bufsize);
				if($len === 0) {
					throw new HException(haxe_io_Error::$Blocked);
				}
				$p = 0;
				while($len > 0) {
					$k = $this->writeBytes($buf, $p, $len);
					if($k === 0) {
						throw new HException(haxe_io_Error::$Blocked);
					}
					$p += $k;
					$len -= $k;
					unset($k);
				}
				unset($p,$len);
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			if(($e = $_ex_) instanceof haxe_io_Eof){
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
			} else throw $__hx__e;;
		}
		$GLOBALS['%s']->pop();
	}
	public function writeString($s) {
		$GLOBALS['%s']->push("haxe.io.Output::writeString");
		$__hx__spos = $GLOBALS['%s']->length;
		$b = haxe_io_Bytes::ofString($s);
		$this->writeFullBytes($b, 0, $b->length);
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
	function __toString() { return 'haxe.io.Output'; }
}
