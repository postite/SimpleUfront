<?php

// Generated by Haxe 3.3.0
class haxe_Template {
	public function __construct($str) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("haxe.Template::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$tokens = $this->parseTokens($str);
		$this->expr = $this->parseBlock($tokens);
		$tmp = !$tokens->isEmpty();
		if($tmp) {
			$tmp1 = Std::string($tokens->first()->s);
			throw new HException("Unexpected '" . _hx_string_or_null($tmp1) . "'");
		}
		$GLOBALS['%s']->pop();
	}}
	public $expr;
	public $context;
	public $macros;
	public $stack;
	public $buf;
	public function execute($context, $macros = null) {
		$GLOBALS['%s']->push("haxe.Template::execute");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($macros === null) {
			$tmp = _hx_anonymous(array());
		} else {
			$tmp = $macros;
		}
		$this->macros = $tmp;
		$this->context = $context;
		$this->stack = new HList();
		$this->buf = new StringBuf();
		$this->run($this->expr);
		{
			$tmp2 = $this->buf->b;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function resolve($v) {
		$GLOBALS['%s']->push("haxe.Template::resolve");
		$__hx__spos = $GLOBALS['%s']->length;
		$value = Reflect::getProperty($this->context, $v);
		$tmp = null;
		if($value === null) {
			$o = $this->context;
			$tmp = _hx_has_field($o, $v);
		} else {
			$tmp = true;
		}
		if($tmp) {
			$GLOBALS['%s']->pop();
			return $value;
		}
		{
			$tmp1 = $this->stack->iterator();
			while(true) {
				$tmp2 = !$tmp1->hasNext();
				if($tmp2) {
					break;
				}
				$ctx = $tmp1->next();
				$v1 = Reflect::getProperty($ctx, $v);
				$tmp3 = null;
				if($v1 === null) {
					$tmp3 = _hx_has_field($ctx, $v1);
				} else {
					$tmp3 = true;
				}
				if($tmp3) {
					$GLOBALS['%s']->pop();
					return $v1;
				}
				unset($v1,$tmp3,$tmp2,$ctx);
			}
		}
		if($v === "__current__") {
			$tmp2 = $this->context;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		{
			$tmp2 = Reflect::field(haxe_Template::$globals, $v);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function parseTokens($data) {
		$GLOBALS['%s']->push("haxe.Template::parseTokens");
		$__hx__spos = $GLOBALS['%s']->length;
		$tokens = new HList();
		while(true) {
			$tmp = !haxe_Template::$splitter->match($data);
			if($tmp) {
				break;
			}
			$p = haxe_Template::$splitter->matchedPos();
			$tmp1 = $p->pos > 0;
			if($tmp1) {
				$tmp2 = _hx_substr($data, 0, $p->pos);
				$tokens->add(_hx_anonymous(array("p" => $tmp2, "s" => true, "l" => null)));
				unset($tmp2);
			}
			$tmp3 = _hx_char_code_at($data, $p->pos);
			if($tmp3 === 58) {
				$tmp4 = $p->pos + 2;
				$tmp5 = $p->len - 4;
				$tmp6 = _hx_substr($data, $tmp4, $tmp5);
				$tokens->add(_hx_anonymous(array("p" => $tmp6, "s" => false, "l" => null)));
				$data = haxe_Template::$splitter->matchedRight();
				continue;
				unset($tmp6,$tmp5,$tmp4);
			}
			$parp = $p->pos + $p->len;
			$npar = 1;
			$params = (new _hx_array(array()));
			$part = "";
			while(true) {
				$c = _hx_char_code_at($data, $parp);
				++$parp;
				if($c === 40) {
					++$npar;
				} else {
					if($c === 41) {
						--$npar;
						if($npar <= 0) {
							break;
						}
					} else {
						if($c === null) {
							throw new HException("Unclosed macro parenthesis");
						}
					}
				}
				$tmp7 = null;
				if($c === 44) {
					$tmp7 = $npar === 1;
				} else {
					$tmp7 = false;
				}
				if($tmp7) {
					$params->push($part);
					$part = "";
				} else {
					$part .= _hx_string_or_null(chr($c));
				}
				unset($tmp7,$c);
			}
			$params->push($part);
			$tmp8 = haxe_Template::$splitter->matched(2);
			$tokens->add(_hx_anonymous(array("p" => $tmp8, "s" => false, "l" => $params)));
			$tmp9 = strlen($data) - $parp;
			$data = _hx_substr($data, $parp, $tmp9);
			unset($tmp9,$tmp8,$tmp3,$tmp1,$tmp,$part,$parp,$params,$p,$npar);
		}
		$tmp10 = strlen($data) > 0;
		if($tmp10) {
			$tokens->add(_hx_anonymous(array("p" => $data, "s" => true, "l" => null)));
		}
		{
			$GLOBALS['%s']->pop();
			return $tokens;
		}
		$GLOBALS['%s']->pop();
	}
	public function parseBlock($tokens) {
		$GLOBALS['%s']->push("haxe.Template::parseBlock");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		while(true) {
			$t = $tokens->first();
			if($t === null) {
				break;
			}
			$tmp = null;
			$tmp1 = !$t->s;
			if($tmp1) {
				$tmp2 = null;
				if($t->p !== "end") {
					$tmp2 = $t->p === "else";
				} else {
					$tmp2 = true;
				}
				if(!$tmp2) {
					$tmp3 = _hx_substr($t->p, 0, 7);
					$tmp = $tmp3 === "elseif ";
					unset($tmp3);
				} else {
					$tmp = true;
				}
				unset($tmp2);
			} else {
				$tmp = false;
			}
			if($tmp) {
				break;
			}
			$tmp4 = $this->parse($tokens);
			$l->add($tmp4);
			unset($tmp4,$tmp1,$tmp,$t);
		}
		$tmp5 = $l->length === 1;
		if($tmp5) {
			$tmp = $l->first();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		{
			$tmp = haxe__Template_TemplateExpr::OpBlock($l);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function parse($tokens) {
		$GLOBALS['%s']->push("haxe.Template::parse");
		$__hx__spos = $GLOBALS['%s']->length;
		$t = $tokens->pop();
		$p = $t->p;
		$tmp = $t->s;
		if($tmp) {
			$tmp2 = haxe__Template_TemplateExpr::OpStr($p);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		if($t->l !== null) {
			$pe = new HList();
			{
				$_g = 0;
				$_g1 = $t->l;
				while($_g < $_g1->length) {
					$p1 = $_g1[$_g];
					++$_g;
					$tmp1 = $this->parseTokens($p1);
					$tmp2 = $this->parseBlock($tmp1);
					$pe->add($tmp2);
					unset($tmp2,$tmp1,$p1);
				}
			}
			{
				$tmp2 = haxe__Template_TemplateExpr::OpMacro($p, $pe);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp3 = _hx_substr($p, 0, 3);
		if($tmp3 === "if ") {
			$tmp4 = strlen($p) - 3;
			$p = _hx_substr($p, 3, $tmp4);
			$e = $this->parseExpr($p);
			$eif = $this->parseBlock($tokens);
			$t1 = $tokens->first();
			$eelse = null;
			if($t1 === null) {
				throw new HException("Unclosed 'if'");
			}
			if($t1->p === "end") {
				$tokens->pop();
				$eelse = null;
			} else {
				if($t1->p === "else") {
					$tokens->pop();
					$eelse = $this->parseBlock($tokens);
					$t1 = $tokens->pop();
					$tmp5 = null;
					if($t1 !== null) {
						$tmp5 = $t1->p !== "end";
					} else {
						$tmp5 = true;
					}
					if($tmp5) {
						throw new HException("Unclosed 'else'");
					}
				} else {
					$tmp6 = strlen($t1->p) - 4;
					$t1->p = _hx_substr($t1->p, 4, $tmp6);
					$eelse = $this->parse($tokens);
				}
			}
			{
				$tmp2 = haxe__Template_TemplateExpr::OpIf($e, $eif, $eelse);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp7 = _hx_substr($p, 0, 8);
		if($tmp7 === "foreach ") {
			$tmp8 = strlen($p) - 8;
			$p = _hx_substr($p, 8, $tmp8);
			$e1 = $this->parseExpr($p);
			$efor = $this->parseBlock($tokens);
			$t2 = $tokens->pop();
			$tmp9 = null;
			if($t2 !== null) {
				$tmp9 = $t2->p !== "end";
			} else {
				$tmp9 = true;
			}
			if($tmp9) {
				throw new HException("Unclosed 'foreach'");
			}
			{
				$tmp2 = haxe__Template_TemplateExpr::OpForeach($e1, $efor);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp10 = haxe_Template::$expr_splitter->match($p);
		if($tmp10) {
			$tmp11 = $this->parseExpr($p);
			{
				$tmp2 = haxe__Template_TemplateExpr::OpExpr($tmp11);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		{
			$tmp2 = haxe__Template_TemplateExpr::OpVar($p);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function parseExpr($data) {
		$GLOBALS['%s']->push("haxe.Template::parseExpr");
		$__hx__spos = $GLOBALS['%s']->length;
		$l = new HList();
		$expr = $data;
		while(true) {
			$tmp = !haxe_Template::$expr_splitter->match($data);
			if($tmp) {
				break;
			}
			$p = haxe_Template::$expr_splitter->matchedPos();
			$tmp1 = $p->pos !== 0;
			if($tmp1) {
				$tmp2 = _hx_substr($data, 0, $p->pos);
				$l->add(_hx_anonymous(array("p" => $tmp2, "s" => true)));
				unset($tmp2);
			}
			$p1 = haxe_Template::$expr_splitter->matched(0);
			$tmp3 = _hx_index_of($p1, "\"", null);
			$l->add(_hx_anonymous(array("p" => $p1, "s" => $tmp3 >= 0)));
			$data = haxe_Template::$expr_splitter->matchedRight();
			unset($tmp3,$tmp1,$tmp,$p1,$p);
		}
		$tmp4 = strlen($data) !== 0;
		if($tmp4) {
			$l->add(_hx_anonymous(array("p" => $data, "s" => true)));
		}
		$e = null;
		try {
			$e = $this->makeExpr($l);
			$tmp5 = !$l->isEmpty();
			if($tmp5) {
				throw new HException($l->first()->p);
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			if(is_string($s = $_ex_)){
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				throw new HException("Unexpected '" . _hx_string_or_null($s) . "' in " . _hx_string_or_null($expr));
			} else throw $__hx__e;;
		}
		{
			$tmp = array(new _hx_lambda(array(&$e, &$expr), "haxe_Template_0"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function makeConst($v) {
		$GLOBALS['%s']->push("haxe.Template::makeConst");
		$__hx__spos = $GLOBALS['%s']->length;
		haxe_Template::$expr_trim->match($v);
		$v = haxe_Template::$expr_trim->matched(1);
		$tmp = _hx_char_code_at($v, 0);
		if($tmp === 34) {
			$tmp1 = strlen($v) - 2;
			$str = _hx_substr($v, 1, $tmp1);
			{
				$tmp2 = array(new _hx_lambda(array(&$str), "haxe_Template_1"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}
		$tmp2 = haxe_Template::$expr_int->match($v);
		if($tmp2) {
			$i = Std::parseInt($v);
			{
				$tmp3 = array(new _hx_lambda(array(&$i), "haxe_Template_2"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}
		}
		$tmp3 = haxe_Template::$expr_float->match($v);
		if($tmp3) {
			$f = Std::parseFloat($v);
			{
				$tmp4 = array(new _hx_lambda(array(&$f), "haxe_Template_3"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp4;
			}
		}
		$me = $this;
		{
			$tmp4 = array(new _hx_lambda(array(&$me, &$v), "haxe_Template_4"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp4;
		}
		$GLOBALS['%s']->pop();
	}
	public function makePath($e, $l) {
		$GLOBALS['%s']->push("haxe.Template::makePath");
		$__hx__spos = $GLOBALS['%s']->length;
		$p = $l->first();
		$tmp = null;
		if($p !== null) {
			$tmp = $p->p !== ".";
		} else {
			$tmp = true;
		}
		if($tmp) {
			$GLOBALS['%s']->pop();
			return $e;
		}
		$l->pop();
		$field = $l->pop();
		$tmp1 = null;
		if($field !== null) {
			$tmp1 = !$field->s;
		} else {
			$tmp1 = true;
		}
		if($tmp1) {
			throw new HException($field->p);
		}
		$f = $field->p;
		haxe_Template::$expr_trim->match($f);
		$f = haxe_Template::$expr_trim->matched(1);
		{
			$tmp2 = $this->makePath(array(new _hx_lambda(array(&$e, &$f), "haxe_Template_5"), 'execute'), $l);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function makeExpr($l) {
		$GLOBALS['%s']->push("haxe.Template::makeExpr");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $this->makeExpr2($l);
		{
			$tmp2 = $this->makePath($tmp, $l);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function makeExpr2($l) {
		$GLOBALS['%s']->push("haxe.Template::makeExpr2");
		$__hx__spos = $GLOBALS['%s']->length;
		$p = $l->pop();
		if($p === null) {
			throw new HException("<eof>");
		}
		$tmp = $p->s;
		if($tmp) {
			$tmp2 = $this->makeConst($p->p);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		switch($p->p) {
		case "!":{
			$e = $this->makeExpr($l);
			{
				$tmp2 = array(new _hx_lambda(array(&$e), "haxe_Template_6"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		case "(":{
			$e1 = $this->makeExpr($l);
			$p1 = $l->pop();
			$tmp1 = null;
			if($p1 !== null) {
				$tmp1 = $p1->s;
			} else {
				$tmp1 = true;
			}
			if($tmp1) {
				throw new HException($p1);
			}
			if($p1->p === ")") {
				$GLOBALS['%s']->pop();
				return $e1;
			}
			$e2 = $this->makeExpr($l);
			$p2 = $l->pop();
			$tmp2 = null;
			if($p2 !== null) {
				$tmp2 = $p2->p !== ")";
			} else {
				$tmp2 = true;
			}
			if($tmp2) {
				throw new HException($p2);
			}
			switch($p1->p) {
			case "!=":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_7"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "&&":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_8"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "*":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_9"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "+":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_10"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "-":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_11"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "/":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_12"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "<":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_13"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "<=":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_14"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "==":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_15"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case ">":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_16"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case ">=":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_17"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			case "||":{
				$tmp3 = array(new _hx_lambda(array(&$e1, &$e2), "haxe_Template_18"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp3;
			}break;
			default:{
				throw new HException("Unknown operation " . _hx_string_or_null($p1->p));
			}break;
			}
		}break;
		case "-":{
			$e3 = $this->makeExpr($l);
			{
				$tmp2 = array(new _hx_lambda(array(&$e3), "haxe_Template_19"), 'execute');
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		}
		throw new HException($p->p);
		$GLOBALS['%s']->pop();
	}
	public function run($e) {
		$GLOBALS['%s']->push("haxe.Template::run");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $e->index;
		switch($tmp) {
		case 0:{
			$tmp1 = $this->resolve(_hx_deref($e)->params[0]);
			$tmp2 = Std::string($tmp1);
			$this->buf->add($tmp2);
		}break;
		case 1:{
			$tmp3 = _hx_deref($e)->params[0]();
			$tmp4 = Std::string($tmp3);
			$this->buf->add($tmp4);
		}break;
		case 2:{
			$eelse = _hx_deref($e)->params[2];
			$eif = _hx_deref($e)->params[1];
			{
				$v = _hx_deref($e)->params[0]();
				$tmp5 = null;
				if($v !== null) {
					$tmp5 = _hx_equal($v, false);
				} else {
					$tmp5 = true;
				}
				if($tmp5) {
					if($eelse !== null) {
						$this->run($eelse);
					}
				} else {
					$this->run($eif);
				}
			}
		}break;
		case 3:{
			$this->buf->add(_hx_deref($e)->params[0]);
		}break;
		case 4:{
			$tmp6 = _hx_deref($e)->params[0]->iterator();
			while(true) {
				$tmp7 = !$tmp6->hasNext();
				if($tmp7) {
					break;
				}
				$e1 = $tmp6->next();
				$this->run($e1);
				unset($tmp7,$e1);
			}
		}break;
		case 5:{
			$loop = _hx_deref($e)->params[1];
			{
				$v1 = _hx_deref($e)->params[0]();
				try {
					$x = $v1->iterator();
					if(_hx_field($x, "hasNext") === null) {
						throw new HException(null);
					}
					$v1 = $x;
				}catch(Exception $__hx__e) {
					$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
					$e2 = $_ex_;
					{
						$GLOBALS['%e'] = (new _hx_array(array()));
						while($GLOBALS['%s']->length >= $__hx__spos) {
							$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
						}
						$GLOBALS['%s']->push($GLOBALS['%e'][0]);
						try {
							if(_hx_field($v1, "hasNext") === null) {
								throw new HException(null);
							}
						}catch(Exception $__hx__e) {
							$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
							$e3 = $_ex_;
							{
								$GLOBALS['%e'] = (new _hx_array(array()));
								while($GLOBALS['%s']->length >= $__hx__spos) {
									$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
								}
								$GLOBALS['%s']->push($GLOBALS['%e'][0]);
								$tmp8 = Std::string($v1);
								throw new HException("Cannot iter on " . _hx_string_or_null($tmp8));
							}
						}
					}
				}
				$this->stack->push($this->context);
				$v2 = $v1;
				while(true) {
					$tmp9 = !$v2->hasNext();
					if($tmp9) {
						break;
					}
					$ctx = $v2->next();
					$this->context = $ctx;
					$this->run($loop);
					unset($tmp9,$ctx);
				}
				$this->context = $this->stack->pop();
			}
		}break;
		case 6:{
			$params = _hx_deref($e)->params[1];
			$m = _hx_deref($e)->params[0];
			{
				$v3 = Reflect::field($this->macros, $m);
				$pl = new _hx_array(array());
				$old = $this->buf;
				$pl->push((isset($this->resolve) ? $this->resolve: array($this, "resolve")));
				{
					$tmp10 = $params->iterator();
					while(true) {
						$tmp11 = !$tmp10->hasNext();
						if($tmp11) {
							break;
						}
						$p = $tmp10->next();
						$tmp12 = $p->index === 0;
						if($tmp12) {
							$tmp13 = $this->resolve(_hx_deref($p)->params[0]);
							$pl->push($tmp13);
							unset($tmp13);
						} else {
							$this->buf = new StringBuf();
							$this->run($p);
							$pl->push($this->buf->b);
						}
						unset($tmp12,$tmp11,$p);
					}
				}
				$this->buf = $old;
				try {
					$tmp14 = Reflect::callMethod($this->macros, $v3, $pl);
					$tmp15 = Std::string($tmp14);
					$this->buf->add($tmp15);
				}catch(Exception $__hx__e) {
					$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
					$e4 = $_ex_;
					{
						$GLOBALS['%e'] = (new _hx_array(array()));
						while($GLOBALS['%s']->length >= $__hx__spos) {
							$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
						}
						$GLOBALS['%s']->push($GLOBALS['%e'][0]);
						$plstr = null;
						try {
							$plstr = $pl->join(",");
						}catch(Exception $__hx__e) {
							$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
							$e5 = $_ex_;
							{
								$GLOBALS['%e'] = (new _hx_array(array()));
								while($GLOBALS['%s']->length >= $__hx__spos) {
									$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
								}
								$GLOBALS['%s']->push($GLOBALS['%e'][0]);
								$plstr = "???";
							}
						}
						$tmp16 = "Macro call " . _hx_string_or_null($m) . "(" . _hx_string_or_null($plstr) . ") failed (";
						$tmp17 = Std::string($e4);
						throw new HException(_hx_string_or_null($tmp16) . _hx_string_or_null($tmp17) . ")");
					}
				}
			}
		}break;
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
	static $splitter;
	static $expr_splitter;
	static $expr_trim;
	static $expr_int;
	static $expr_float;
	static function globals() { $args = func_get_args(); return call_user_func_array(self::$globals, $args); }
	static $globals;
	function __toString() { return 'haxe.Template'; }
}
haxe_Template::$splitter = new EReg("(::[A-Za-z0-9_ ()&|!+=/><*.\"-]+::|\\\$\\\$([A-Za-z0-9_-]+)\\()", "");
haxe_Template::$expr_splitter = new EReg("(\\(|\\)|[ \x0D\x0A\x09]*\"[^\"]*\"[ \x0D\x0A\x09]*|[!+=/><*.&|-]+)", "");
haxe_Template::$expr_trim = new EReg("^[ ]*([^ ]+)[ ]*\$", "");
haxe_Template::$expr_int = new EReg("^[0-9]+\$", "");
haxe_Template::$expr_float = new EReg("^([+-]?)(?=\\d|,\\d)\\d*(,\\d*)?([Ee]([+-]?\\d+))?\$", "");
haxe_Template::$globals = _hx_anonymous(array());
function haxe_Template_0(&$e, &$expr) {
	{
		$GLOBALS['%s']->push("haxe.Template::parseExpr@261");
		$__hx__spos = $GLOBALS['%s']->length;
		try {
			{
				$tmp = call_user_func($e);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$exc = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				$tmp6 = Std::string($exc);
				throw new HException("Error : " . _hx_string_or_null($tmp6) . " in " . _hx_string_or_null($expr));
			}
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_1(&$str) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeConst@275");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $str;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_2(&$i) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeConst@279");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $i;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_3(&$f) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeConst@283");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $f;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_4(&$me, &$v) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeConst@286");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $me->resolve($v);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_5(&$e, &$f) {
	{
		$GLOBALS['%s']->push("haxe.Template::makePath@300");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = call_user_func($e);
		{
			$tmp = Reflect::field($tmp2, $f);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_6(&$e) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@342");
		$__hx__spos = $GLOBALS['%s']->length;
		$v = call_user_func($e);
		if($v !== null) {
			$tmp = _hx_equal($v, false);
			$GLOBALS['%s']->pop();
			return $tmp;
		} else {
			$GLOBALS['%s']->pop();
			return true;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_7(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@335");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp3 = call_user_func($e1);
		$tmp4 = call_user_func($e2);
		{
			$tmp = !_hx_equal($tmp3, $tmp4);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_8(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@336");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp5 = null;
		$tmp6 = call_user_func($e1);
		if($tmp6) {
			$tmp5 = call_user_func($e2);
		} else {
			$tmp5 = false;
		}
		{
			$tmp = $tmp5;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_9(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@328");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp7 = call_user_func($e1);
		$tmp8 = call_user_func($e2);
		{
			$tmp = $tmp7 * $tmp8;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_10(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@326");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp9 = call_user_func($e1);
		$tmp10 = call_user_func($e2);
		{
			$tmp = _hx_add($tmp9, $tmp10);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_11(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@327");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp11 = call_user_func($e1);
		$tmp12 = call_user_func($e2);
		{
			$tmp = $tmp11 - $tmp12;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_12(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@329");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp13 = call_user_func($e1);
		$tmp14 = call_user_func($e2);
		{
			$tmp = $tmp13 / $tmp14;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_13(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@331");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp15 = call_user_func($e1);
		$tmp16 = call_user_func($e2);
		{
			$tmp = $tmp15 < $tmp16;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_14(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@333");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp17 = call_user_func($e1);
		$tmp18 = call_user_func($e2);
		{
			$tmp = $tmp17 <= $tmp18;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_15(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@334");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp19 = call_user_func($e1);
		$tmp20 = call_user_func($e2);
		{
			$tmp = _hx_equal($tmp19, $tmp20);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_16(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@330");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp21 = call_user_func($e1);
		$tmp22 = call_user_func($e2);
		{
			$tmp = $tmp21 > $tmp22;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_17(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@332");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp23 = call_user_func($e1);
		$tmp24 = call_user_func($e2);
		{
			$tmp = $tmp23 >= $tmp24;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_18(&$e1, &$e2) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@337");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp25 = null;
		$tmp26 = !call_user_func($e1);
		if($tmp26) {
			$tmp25 = call_user_func($e2);
		} else {
			$tmp25 = true;
		}
		{
			$tmp = $tmp25;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function haxe_Template_19(&$e3) {
	{
		$GLOBALS['%s']->push("haxe.Template::makeExpr2@348");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = -call_user_func($e3);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
