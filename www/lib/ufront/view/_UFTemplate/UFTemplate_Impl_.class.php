<?php

// Generated by Haxe 3.3.0
class ufront_view__UFTemplate_UFTemplate_Impl_ {
	public function __construct(){}
	static function _new($cb) {
		$GLOBALS['%s']->push("ufront.view._UFTemplate.UFTemplate_Impl_::_new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $cb;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function fromSimpleCallback($cb) {
		$GLOBALS['%s']->push("ufront.view._UFTemplate.UFTemplate_Impl_::fromSimpleCallback");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = ufront_view__UFTemplate_UFTemplate_Impl_::_new(array(new _hx_lambda(array(&$cb), "ufront_view__UFTemplate_UFTemplate_Impl__0"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function execute($this1, $data, $helpers = null) {
		$GLOBALS['%s']->push("ufront.view._UFTemplate.UFTemplate_Impl_::execute");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = call_user_func_array($this1, array($data, $helpers));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.view._UFTemplate.UFTemplate_Impl_'; }
}
function ufront_view__UFTemplate_UFTemplate_Impl__0(&$cb, $data, $helpers) {
	{
		$GLOBALS['%s']->push("ufront.view._UFTemplate.UFTemplate_Impl_::fromSimpleCallback@36");
		$__hx__spos = $GLOBALS['%s']->length;
		$combinedData = _hx_anonymous(array());
		if($helpers !== null) {
			$tmp = $helpers->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$helperName = $tmp->next();
				$tmp2 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($helpers->get($helperName));
				ufront_view__TemplateData_TemplateData_Impl_::set($combinedData, $helperName, $tmp2);
				unset($tmp2,$tmp1,$helperName);
			}
		}
		ufront_view__TemplateData_TemplateData_Impl_::setObject($combinedData, $data);
		{
			$tmp = call_user_func_array($cb, array($combinedData));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
