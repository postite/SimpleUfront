<?php

// Generated by Haxe 3.3.0
class ufront_view_TemplatingEngines {
	public function __construct(){}
	static $all;
	static $haxe;
	static function get_haxe() {
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_haxe");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_anonymous(array("factory" => array(new _hx_lambda(array(), "ufront_view_TemplatingEngines_0"), 'execute'), "type" => "haxe.Template", "extensions" => (new _hx_array(array("html", "tpl")))));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function padHelperFnForHaxeTplMacro($h) {
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro");
		$__hx__spos = $GLOBALS['%s']->length;
		$_g = $h->numArgs;
		switch($_g) {
		case 0:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_1"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_2"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 2:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_3"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 3:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_4"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 4:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_5"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 5:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_6"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 6:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_7"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 7:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_8"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		default:{
			throw new HException("TemplateHelper supports a maximum of 7 arguments");
		}break;
		}
		$GLOBALS['%s']->pop();
	}
	static $erazor;
	static function get_erazor() {
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_erazor");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_anonymous(array("factory" => array(new _hx_lambda(array(), "ufront_view_TemplatingEngines_9"), 'execute'), "type" => "erazor.Template", "extensions" => (new _hx_array(array("html", "erazor")))));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static $erazorHtml;
	static function get_erazorHtml() {
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_erazorHtml");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = _hx_anonymous(array("factory" => array(new _hx_lambda(array(), "ufront_view_TemplatingEngines_10"), 'execute'), "type" => "erazor.HtmlTemplate", "extensions" => (new _hx_array(array("html", "erazor")))));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function wrapHelperFnWithErazorSafeString($h) {
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString");
		$__hx__spos = $GLOBALS['%s']->length;
		$_g = $h->numArgs;
		switch($_g) {
		case 0:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_11"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_12"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 2:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_13"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 3:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_14"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 4:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_15"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 5:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_16"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 6:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_17"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 7:{
			$tmp = array(new _hx_lambda(array(&$h), "ufront_view_TemplatingEngines_18"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		default:{
			throw new HException("TemplateHelper supports a maximum of 7 arguments");
		}break;
		}
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_erazorHtml" => "get_erazorHtml","get_erazor" => "get_erazor","get_haxe" => "get_haxe");
	function __toString() { return 'ufront.view.TemplatingEngines'; }
}
ufront_view_TemplatingEngines::$all = ufront_view_TemplatingEngines_19();
function ufront_view_TemplatingEngines_0($tplString) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_haxe@49");
		$__hx__spos = $GLOBALS['%s']->length;
		$t = new haxe_Template($tplString);
		{
			$tmp = array(new _hx_lambda(array(&$t), "ufront_view_TemplatingEngines_20"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_1(&$h, $_) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@66");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp2 = call_user_func($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_2(&$h, $_1, $a) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@67");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp1 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp1, array($a));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_3(&$h, $_2, $a1, $b) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@68");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp2, array($a1, $b));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_4(&$h, $_3, $a2, $b1, $c) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@69");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp3 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp3, array($a2, $b1, $c));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_5(&$h, $_4, $a3, $b2, $c1, $d) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@70");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp4 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp4, array($a3, $b2, $c1, $d));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_6(&$h, $_5, $a4, $b3, $c2, $d1, $e) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@71");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp5 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp5, array($a4, $b3, $c2, $d1, $e));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_7(&$h, $_6, $a5, $b4, $c3, $d2, $e1, $f) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@72");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp6 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp6, array($a5, $b4, $c3, $d2, $e1, $f));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_8(&$h, $_7, $a6, $b5, $c4, $d3, $e2, $f1, $g) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::padHelperFnForHaxeTplMacro@73");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp7 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		{
			$tmp = call_user_func_array($tmp7, array($a6, $b5, $c4, $d3, $e2, $f1, $g));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_9($tplString) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_erazor@139");
		$__hx__spos = $GLOBALS['%s']->length;
		$t = new erazor_Template($tplString);
		{
			$tmp = ufront_view__UFTemplate_UFTemplate_Impl_::fromSimpleCallback(array(new _hx_lambda(array(&$t), "ufront_view_TemplatingEngines_21"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_10($tplString) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::get_erazorHtml@164");
		$__hx__spos = $GLOBALS['%s']->length;
		$t = new erazor_HtmlTemplate($tplString);
		{
			$tmp = array(new _hx_lambda(array(&$t), "ufront_view_TemplatingEngines_22"), 'execute');
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_11(&$h) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@184");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp1 = call_user_func($tmp);
		{
			$tmp2 = new erazor_TString($tmp1);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_12(&$h, $a) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@185");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp3 = call_user_func_array($tmp2, array($a));
		{
			$tmp = new erazor_TString($tmp3);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_13(&$h, $a1, $b) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@186");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp4 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp5 = call_user_func_array($tmp4, array($a1, $b));
		{
			$tmp = new erazor_TString($tmp5);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_14(&$h, $a2, $b1, $c) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@187");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp6 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp7 = call_user_func_array($tmp6, array($a2, $b1, $c));
		{
			$tmp = new erazor_TString($tmp7);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_15(&$h, $a3, $b2, $c1, $d) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@188");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp8 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp9 = call_user_func_array($tmp8, array($a3, $b2, $c1, $d));
		{
			$tmp = new erazor_TString($tmp9);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_16(&$h, $a4, $b3, $c2, $d1, $e) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@189");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp10 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp11 = call_user_func_array($tmp10, array($a4, $b3, $c2, $d1, $e));
		{
			$tmp = new erazor_TString($tmp11);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_17(&$h, $a5, $b4, $c3, $d2, $e1, $f) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@190");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp12 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp13 = call_user_func_array($tmp12, array($a5, $b4, $c3, $d2, $e1, $f));
		{
			$tmp = new erazor_TString($tmp13);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_18(&$h, $a6, $b5, $c4, $d3, $e2, $f1, $g) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@191");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp14 = ufront_view__TemplateHelper_TemplateHelper_Impl_::getFn($h);
		$tmp15 = call_user_func_array($tmp14, array($a6, $b5, $c4, $d3, $e2, $f1, $g));
		{
			$tmp = new erazor_TString($tmp15);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_19() {
	{
		$tmp = ufront_view_TemplatingEngines::get_erazorHtml();
		$tmp1 = ufront_view_TemplatingEngines::get_erazor();
		$tmp2 = ufront_view_TemplatingEngines::get_haxe();
		return (new _hx_array(array($tmp, $tmp1, $tmp2)));
	}
}
function ufront_view_TemplatingEngines_20(&$t, $data, $helpers) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@51");
		$__hx__spos = $GLOBALS['%s']->length;
		$macrosObject = _hx_anonymous(array());
		if($helpers !== null) {
			$tmp = $helpers->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$helperName = $tmp->next();
				$paddedHelper = ufront_view_TemplatingEngines::padHelperFnForHaxeTplMacro($helpers->get($helperName));
				$macrosObject->{$helperName} = $paddedHelper;
				unset($tmp1,$paddedHelper,$helperName);
			}
		}
		{
			$tmp = $t->execute($data, $macrosObject);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_21(&$t, $data) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@141");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $t->execute($data);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_view_TemplatingEngines_22(&$t, $data, $helpers) {
	{
		$GLOBALS['%s']->push("ufront.view.TemplatingEngines::wrapHelperFnWithErazorSafeString@166");
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
				$wrappedHelper = ufront_view_TemplatingEngines::wrapHelperFnWithErazorSafeString($helpers->get($helperName));
				ufront_view__TemplateData_TemplateData_Impl_::set($combinedData, $helperName, $wrappedHelper);
				unset($wrappedHelper,$tmp1,$helperName);
			}
		}
		ufront_view__TemplateData_TemplateData_Impl_::setObject($combinedData, $data);
		{
			$tmp = $t->execute($combinedData);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}