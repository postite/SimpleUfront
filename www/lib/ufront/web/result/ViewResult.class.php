<?php

// Generated by Haxe 3.3.0
class ufront_web_result_ViewResult extends ufront_web_result_ActionResult {
	public function __construct($data = null, $viewPath = null, $templatingEngine = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = null;
		if($data !== null) {
			$tmp = $data;
		} else {
			$obj = _hx_anonymous(array());
			$this1 = null;
			if($obj !== null) {
				$this1 = $obj;
			} else {
				$this1 = _hx_anonymous(array());
			}
			$tmp = ufront_view__TemplateData_TemplateData_Impl_::setObject($this1, _hx_anonymous(array()));
		}
		$this->data = $tmp;
		$this->helpers = new haxe_ds_StringMap();
		$this->partials = new haxe_ds_StringMap();
		$tmp1 = null;
		if($viewPath !== null) {
			$tmp1 = ufront_web_result_TemplateSource::TFromEngine($viewPath, $templatingEngine);
		} else {
			$tmp1 = ufront_web_result_TemplateSource::$TUnknown;
		}
		$this->templateSource = $tmp1;
		$this->layoutSource = ufront_web_result_TemplateSource::$TUnknown;
		$this->finalOutputTrigger = new tink_core_FutureTrigger();
		$this->finalOutput = (isset($this->finalOutputTrigger->future) ? $this->finalOutputTrigger->future: array($this->finalOutputTrigger, "future"));
		$GLOBALS['%s']->pop();
	}}
	public $data;
	public $helpers;
	public $partials;
	public $viewFolder;
	public $templateSource;
	public $layoutSource;
	public $finalOutput;
	public $finalOutputTrigger;
	public function withLayout($layoutPath, $templatingEngine = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::withLayout");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->layoutSource = ufront_web_result_TemplateSource::TFromEngine($layoutPath, $templatingEngine);
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function withoutLayout() {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::withoutLayout");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->layoutSource = ufront_web_result_TemplateSource::$TNone;
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function usingTemplateString($template, $layout = null, $templatingEngine = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::usingTemplateString");
		$__hx__spos = $GLOBALS['%s']->length;
		if($templatingEngine === null) {
			$templatingEngine = ufront_view_TemplatingEngines::get_haxe();
		}
		if($template !== null) {
			$this->templateSource = ufront_web_result_TemplateSource::TFromString($template, $templatingEngine);
		}
		if($layout !== null) {
			$this->layoutSource = ufront_web_result_TemplateSource::TFromString($layout, $templatingEngine);
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function setVar($key, $val) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::setVar");
		$__hx__spos = $GLOBALS['%s']->length;
		ufront_view__TemplateData_TemplateData_Impl_::array_set($this->data, $key, $val);
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function setVars($map = null, $obj = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::setVars");
		$__hx__spos = $GLOBALS['%s']->length;
		if($map !== null) {
			ufront_view__TemplateData_TemplateData_Impl_::setMap($this->data, $map);
		}
		if($obj !== null) {
			ufront_view__TemplateData_TemplateData_Impl_::setObject($this->data, $obj);
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addHelper($name, $helper) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addHelper");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->helpers->set($name, $helper);
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addHelpers($helpers) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addHelpers");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $helpers->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$name = $tmp->next();
				$this->addHelper($name, $helpers->get($name));
				unset($tmp1,$name);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addPartial($name, $partialPath, $templatingEngine = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addPartial");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$v = ufront_web_result_TemplateSource::TFromEngine($partialPath, $templatingEngine);
			$this->partials->set($name, $v);
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addPartialString($name, $partialTemplate, $templatingEngine) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addPartialString");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$v = ufront_web_result_TemplateSource::TFromString($partialTemplate, $templatingEngine);
			$this->partials->set($name, $v);
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addPartials($partials, $templatingEngine = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addPartials");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $partials->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$name = $tmp->next();
				$this->addPartial($name, $partials->get($name), $templatingEngine);
				unset($tmp1,$name);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function addPartialStrings($partials, $templatingEngine) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addPartialStrings");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $partials->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$name = $tmp->next();
				$this->addPartialString($name, $partials->get($name), $templatingEngine);
				unset($tmp1,$name);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $this;
		}
		$GLOBALS['%s']->pop();
	}
	public function executeResult($actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::executeResult");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$_g = $this->layoutSource;
		$tmp = null;
		if($_g->index === 3) {
			$tmp = true;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$this->layoutSource = ufront_web_result_ViewResult::inferLayoutFromContext($actionContext);
		}
		$_g1 = $this->templateSource;
		$tmp1 = null;
		if($_g1->index === 3) {
			$tmp1 = true;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			$this->templateSource = ufront_web_result_ViewResult::inferViewPathFromContext($actionContext);
		}
		if($this->viewFolder === null) {
			$this->viewFolder = ufront_web_result_ViewResult::getViewFolder($actionContext);
		}
		$viewEngine = null;
		try {
			$viewEngine = $actionContext->httpContext->injector->getValueForType("ufront.view.UFViewEngine", null);
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				{
					$tmp2 = ufront_core_SurpriseTools::asSurpriseError($e, "Failed to find a UFViewEngine in ViewResult.executeResult(), please make sure that one is made available in your application's injector", _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 456, "className" => "ufront.web.result.ViewResult", "methodName" => "executeResult")));
					$GLOBALS['%s']->pop();
					return $tmp2;
				}
			}
		}
		$defaultData = _hx_anonymous(array());
		$controller = Std::instance($actionContext->controller, _hx_qtype("ufront.web.Controller"));
		if($controller !== null) {
			ufront_view__TemplateData_TemplateData_Impl_::set($defaultData, "baseUri", $controller->baseUri);
		}
		$tmp2 = $this->renderResult($viewEngine, $defaultData);
		{
			$tmp3 = tink_core__Future_Future_Impl_::_tryMap($tmp2, array(new _hx_lambda(array(&$_gthis, &$actionContext), "ufront_web_result_ViewResult_0"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp3;
		}
		$GLOBALS['%s']->pop();
	}
	public function renderResult($viewEngine, $defaultData = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::renderResult");
		$__hx__spos = $GLOBALS['%s']->length;
		$_gthis = $this;
		$_g = $this->layoutSource;
		$tmp = null;
		if($_g->index === 3) {
			$tmp = true;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp2 = ufront_core_SurpriseTools::asSurpriseError(null, "No layout template source was set on the ViewResult", _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 491, "className" => "ufront.web.result.ViewResult", "methodName" => "renderResult")));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$_g1 = $this->templateSource;
		$tmp1 = null;
		if($_g1->index === 3) {
			$tmp1 = true;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			$tmp2 = ufront_core_SurpriseTools::asSurpriseError(null, "No view template source was set on the ViewResult", _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 493, "className" => "ufront.web.result.ViewResult", "methodName" => "renderResult")));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		if($defaultData === null) {
			$obj = _hx_anonymous(array());
			$this1 = null;
			if($obj !== null) {
				$this1 = $obj;
			} else {
				$this1 = _hx_anonymous(array());
			}
			$defaultData = ufront_view__TemplateData_TemplateData_Impl_::setObject($this1, _hx_anonymous(array()));
		}
		if($this->viewFolder !== null) {
			$this->templateSource = ufront_web_result_ViewResult::addViewFolderToPath($this->templateSource, $this->viewFolder);
			$this->layoutSource = ufront_web_result_ViewResult::addViewFolderToPath($this->layoutSource, $this->viewFolder);
		}
		$templateReady = ufront_web_result_ViewResult::loadTemplateFromSource($this->templateSource, $viewEngine);
		$layoutReady = ufront_web_result_ViewResult::loadTemplateFromSource($this->layoutSource, $viewEngine);
		$partialsReady = ufront_web_result_ViewResult::loadPartialTemplates((new _hx_array(array(ufront_web_result_ViewResult::$globalPartials, $this->partials))), $viewEngine);
		$combinedFuture = tink_core__Future_Future_Impl_::ofMany((new _hx_array(array($templateReady, $layoutReady, $partialsReady))), null);
		$handle = array(new _hx_lambda(array(&$combinedFuture), "ufront_web_result_ViewResult_1"), 'execute');
		$map = array(new _hx_lambda(array(&$combinedFuture), "ufront_web_result_ViewResult_2"), 'execute');
		{
			$tmp2 = _hx_deref(_hx_anonymous(array("handle" => $handle, "map" => $map)))->map(array(new _hx_lambda(array(&$_gthis, &$defaultData), "ufront_web_result_ViewResult_3"), 'execute'));
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	public function writeResponse($response, $actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::writeResponse");
		$__hx__spos = $GLOBALS['%s']->length;
		$actionContext->httpContext->response->set_contentType("text/html");
		$actionContext->httpContext->response->write($response);
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
	static function create($data) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::create");
		$__hx__spos = $GLOBALS['%s']->length;
		$obj = _hx_anonymous(array());
		$this1 = null;
		if($obj !== null) {
			$this1 = $obj;
		} else {
			$this1 = _hx_anonymous(array());
		}
		{
			$tmp = new ufront_web_result_ViewResult(ufront_view__TemplateData_TemplateData_Impl_::setObject($this1, $data), null, null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static $globalValues;
	static $globalHelpers;
	static $globalPartials;
	static function getCombinedMap($mapSets) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::getCombinedMap");
		$__hx__spos = $GLOBALS['%s']->length;
		$combinedMaps = new haxe_ds_StringMap();
		{
			$_g = 0;
			while($_g < $mapSets->length) {
				$set = $mapSets[$_g];
				++$_g;
				{
					$tmp = $set->keys();
					while(true) {
						$tmp1 = !$tmp->hasNext();
						if($tmp1) {
							break;
						}
						$key = $tmp->next();
						$v = $set->get($key);
						$combinedMaps->set($key, $v);
						unset($v,$tmp1,$key);
					}
					unset($tmp);
				}
				unset($set);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $combinedMaps;
		}
		$GLOBALS['%s']->pop();
	}
	static function getViewFolder($actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::getViewFolder");
		$__hx__spos = $GLOBALS['%s']->length;
		$controllerCls = Type::getClass($actionContext->controller);
		$viewFolderMeta = haxe_rtti_Meta::getType($controllerCls)->viewFolder;
		$viewFolder = null;
		$tmp = null;
		if($viewFolderMeta !== null) {
			$tmp = $viewFolderMeta->length > 0;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp1 = $viewFolderMeta[0];
			$tmp2 = Std::string($tmp1);
			$viewFolder = "" . _hx_string_or_null($tmp2);
			$viewFolder = haxe_io_Path::removeTrailingSlashes($viewFolder);
		} else {
			$tmp3 = Type::getClass($actionContext->controller);
			$controllerName = _hx_explode(".", Type::getClassName($tmp3))->pop();
			$tmp4 = strtolower(_hx_char_at($controllerName, 0));
			$tmp5 = _hx_substr($controllerName, 1, null);
			$controllerName = _hx_string_or_null($tmp4) . _hx_string_or_null($tmp5);
			$tmp6 = StringTools::endsWith($controllerName, "Controller");
			if($tmp6) {
				$tmp7 = strlen($controllerName) - 10;
				$controllerName = _hx_substr($controllerName, 0, $tmp7);
			}
			$viewFolder = $controllerName;
		}
		{
			$GLOBALS['%s']->pop();
			return $viewFolder;
		}
		$GLOBALS['%s']->pop();
	}
	static function inferViewPathFromContext($actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::inferViewPathFromContext");
		$__hx__spos = $GLOBALS['%s']->length;
		$viewPath = null;
		$controllerCls = Type::getClass($actionContext->controller);
		$fieldsMeta = haxe_rtti_Meta::getFields($controllerCls);
		$actionFieldMeta = Reflect::field($fieldsMeta, $actionContext->action);
		$tmp = null;
		$tmp1 = null;
		if($actionFieldMeta !== null) {
			$tmp1 = $actionFieldMeta->template !== null;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			$tmp = $actionFieldMeta->template->length > 0;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp2 = $actionFieldMeta->template[0];
			$tmp3 = Std::string($tmp2);
			$viewPath = "" . _hx_string_or_null($tmp3);
		} else {
			$action = $actionContext->action;
			$startsWithDo = StringTools::startsWith($action, "do");
			$thirdCharUpperCase = null;
			$tmp4 = strlen($action) > 2;
			if($tmp4) {
				$tmp5 = _hx_char_at($action, 2);
				$tmp6 = strtoupper(_hx_char_at($action, 2));
				$thirdCharUpperCase = $tmp5 === $tmp6;
			} else {
				$thirdCharUpperCase = false;
			}
			$tmp7 = null;
			if($startsWithDo) {
				$tmp7 = $thirdCharUpperCase;
			} else {
				$tmp7 = false;
			}
			if($tmp7) {
				$action = _hx_substr($action, 2, null);
			}
			$tmp8 = strtolower(_hx_char_at($action, 0));
			$tmp9 = _hx_substr($action, 1, null);
			$viewPath = _hx_string_or_null($tmp8) . _hx_string_or_null($tmp9);
		}
		{
			$tmp2 = ufront_web_result_TemplateSource::TFromEngine($viewPath, null);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function inferLayoutFromContext($actionContext) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::inferLayoutFromContext");
		$__hx__spos = $GLOBALS['%s']->length;
		$layoutPath = null;
		$controllerCls = Type::getClass($actionContext->controller);
		$classMeta = haxe_rtti_Meta::getType($controllerCls);
		$fieldsMeta = haxe_rtti_Meta::getFields($controllerCls);
		$actionFieldMeta = Reflect::field($fieldsMeta, $actionContext->action);
		$tmp = null;
		$tmp1 = null;
		if($actionFieldMeta !== null) {
			$tmp1 = $actionFieldMeta->layout !== null;
		} else {
			$tmp1 = false;
		}
		if($tmp1) {
			$tmp = $actionFieldMeta->layout->length > 0;
		} else {
			$tmp = false;
		}
		if($tmp) {
			$tmp2 = $actionFieldMeta->layout[0];
			$tmp3 = Std::string($tmp2);
			$layoutPath = "" . _hx_string_or_null($tmp3);
		} else {
			$tmp4 = null;
			if($classMeta->layout !== null) {
				$tmp4 = $classMeta->layout->length > 0;
			} else {
				$tmp4 = false;
			}
			if($tmp4) {
				$tmp5 = $classMeta->layout[0];
				$tmp6 = Std::string($tmp5);
				$layoutPath = "" . _hx_string_or_null($tmp6);
			} else {
				try {
					$layoutPath = $actionContext->httpContext->injector->getValueForType("String", "defaultLayout");
					$tmp7 = null;
					if($layoutPath !== null) {
						$tmp8 = StringTools::startsWith($layoutPath, "/");
						$tmp7 = $tmp8 === false;
					} else {
						$tmp7 = false;
					}
					if($tmp7) {
						$layoutPath = "/" . _hx_string_or_null($layoutPath);
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
			}
		}
		if($layoutPath !== null) {
			$tmp2 = ufront_web_result_TemplateSource::TFromEngine($layoutPath, null);
			$GLOBALS['%s']->pop();
			return $tmp2;
		} else {
			$tmp2 = ufront_web_result_TemplateSource::$TNone;
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	static function addViewFolderToPath($layoutSource, $viewFolder) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addViewFolderToPath");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $layoutSource->index === 1;
		if($tmp) {
			$engine = _hx_deref($layoutSource)->params[1];
			$path = _hx_deref($layoutSource)->params[0];
			$tmp1 = StringTools::startsWith($path, "/");
			if($tmp1) {
				$path = _hx_substr($path, 1, null);
			} else {
				$path = "" . _hx_string_or_null($viewFolder) . "/" . _hx_string_or_null($path);
			}
			{
				$tmp2 = ufront_web_result_TemplateSource::TFromEngine($path, $engine);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		} else {
			$GLOBALS['%s']->pop();
			return $layoutSource;
		}
		$GLOBALS['%s']->pop();
	}
	static function loadTemplateFromSource($source, $engine) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::loadTemplateFromSource");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $source->index;
		switch($tmp) {
		case 0:{
			$templatingEngine = _hx_deref($source)->params[1];
			$str = _hx_deref($source)->params[0];
			try {
				$tmp1 = $templatingEngine->factory($str);
				$tmp2 = tink_core_Outcome::Success($tmp1);
				{
					$tmp3 = tink_core__Future_Future_Impl_::sync($tmp2);
					$GLOBALS['%s']->pop();
					return $tmp3;
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
					$tmp3 = ufront_web_result_ViewResult::error("Failed to parse template.", "" . _hx_string_or_null(("Templating Engine: \"" . _hx_string_or_null($templatingEngine->type) . "\"")) . "\x0A" . _hx_string_or_null(("String template: \"" . _hx_string_or_null($str) . "\"")), _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 630, "className" => "ufront.web.result.ViewResult", "methodName" => "loadTemplateFromSource")));
					{
						$tmp2 = tink_core__Future_Future_Impl_::sync($tmp3);
						$GLOBALS['%s']->pop();
						return $tmp2;
					}
				}
			}
		}break;
		case 1:{
			$tmp2 = $engine->getTemplate(_hx_deref($source)->params[0], _hx_deref($source)->params[1]);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}break;
		case 2:case 3:{
			$tmp4 = tink_core_Outcome::Success(null);
			{
				$tmp2 = tink_core__Future_Future_Impl_::sync($tmp4);
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
	static function loadPartialTemplates($partialSources, $engine) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::loadPartialTemplates");
		$__hx__spos = $GLOBALS['%s']->length;
		$allPartialSources = ufront_web_result_ViewResult::getCombinedMap($partialSources);
		$allPartialTemplates = new haxe_ds_StringMap();
		$partialErrors = new haxe_ds_StringMap();
		$allPartialFutures = (new _hx_array(array()));
		{
			$tmp = $allPartialSources->keys();
			while(true) {
				$tmp1 = !$tmp->hasNext();
				if($tmp1) {
					break;
				}
				$name = $tmp->next();
				$source = $allPartialSources->get($name);
				$surprise = ufront_web_result_ViewResult::loadTemplateFromSource($source, $engine);
				$surprise(array(new _hx_lambda(array(&$allPartialTemplates, &$name, &$partialErrors, &$source), "ufront_web_result_ViewResult_4"), 'execute'));
				$allPartialFutures->push($surprise);
				unset($tmp1,$surprise,$source,$name);
			}
		}
		$tmp5 = tink_core__Future_Future_Impl_::ofMany($allPartialFutures, null);
		{
			$tmp = tink_core__Future_Future_Impl_::map($tmp5, array(new _hx_lambda(array(&$allPartialTemplates, &$partialErrors), "ufront_web_result_ViewResult_5"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function addHelpersForPartials($partialTemplates, $contextData, $contextHelpers) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addHelpersForPartials");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $partialTemplates->keys();
		while(true) {
			$tmp1 = !$tmp->hasNext();
			if($tmp1) {
				break;
			}
			$name = $tmp->next();
			$partial = $partialTemplates->get($name);
			$partialFn = array(new _hx_lambda(array(&$contextData, &$contextHelpers, &$name, &$partial), "ufront_web_result_ViewResult_6"), 'execute');
			{
				$v = ufront_view__TemplateHelper_TemplateHelper_Impl_::from1($partialFn);
				$contextHelpers->set($name, $v);
				unset($v);
			}
			unset($tmp1,$partialFn,$partial,$name);
		}
		$GLOBALS['%s']->pop();
	}
	static function executeTemplate($section, $tplOutcome, $combinedData, $combinedHelpers) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::executeTemplate");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = $tplOutcome->index;
		switch($tmp) {
		case 0:{
			try {
				$tmp1 = _hx_deref($tplOutcome)->params[0]($combinedData, $combinedHelpers);
				{
					$tmp2 = tink_core_Outcome::Success($tmp1);
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
					$tmp2 = haxe_CallStack::exceptionStack();
					$tmp3 = haxe_CallStack::toString($tmp2);
					haxe_Log::trace($tmp3, _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 691, "className" => "ufront.web.result.ViewResult", "methodName" => "executeTemplate")));
					$tmp4 = "Unable to execute " . _hx_string_or_null($section) . " template: ";
					$tmp5 = Std::string($e);
					{
						$tmp6 = ufront_web_result_ViewResult::error(_hx_string_or_null($tmp4) . _hx_string_or_null($tmp5), $e, _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 693, "className" => "ufront.web.result.ViewResult", "methodName" => "executeTemplate")));
						$GLOBALS['%s']->pop();
						return $tmp6;
					}
				}
			}
		}break;
		case 1:{
			$err = _hx_deref($tplOutcome)->params[0];
			$tmp6 = "Unable to load " . _hx_string_or_null($section) . " template: ";
			$tmp7 = Std::string($err);
			{
				$tmp2 = ufront_web_result_ViewResult::error(_hx_string_or_null($tmp6) . _hx_string_or_null($tmp7), $err, _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 696, "className" => "ufront.web.result.ViewResult", "methodName" => "executeTemplate")));
				$GLOBALS['%s']->pop();
				return $tmp2;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
	static function error($reason, $data, $pos = null) {
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::error");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp = ufront_web_HttpError::internalServerError($reason, $data, $pos);
		{
			$tmp2 = tink_core_Outcome::Failure($tmp);
			$GLOBALS['%s']->pop();
			return $tmp2;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'ufront.web.result.ViewResult'; }
}
ufront_web_result_ViewResult::$globalValues = ufront_web_result_ViewResult_7();
ufront_web_result_ViewResult::$globalHelpers = new haxe_ds_StringMap();
ufront_web_result_ViewResult::$globalPartials = new haxe_ds_StringMap();
function ufront_web_result_ViewResult_0(&$_gthis, &$actionContext, $finalOut) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::executeResult@464");
		$__hx__spos = $GLOBALS['%s']->length;
		$finalOut = ufront_web_result_ContentResult::replaceVirtualLinks($actionContext, $finalOut);
		$_gthis->writeResponse($finalOut, $actionContext);
		{
			$_this = $_gthis->finalOutputTrigger;
			if($_this->{"list"} !== null) {
				$list = $_this->{"list"};
				$_this->{"list"} = null;
				$_this->result = $finalOut;
				tink_core__Callback_CallbackList_Impl_::invoke($list, $finalOut);
				tink_core__Callback_CallbackList_Impl_::clear($list);
			}
		}
		{
			$tmp = tink_core_Noise::$Noise;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_1(&$combinedFuture, $cb) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::renderResult@79");
		$__hx__spos = $GLOBALS['%s']->length;
		$combinedFuture(array(new _hx_lambda(array(&$cb), "ufront_web_result_ViewResult_8"), 'execute'));
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_2(&$combinedFuture, $cb1) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::renderResult@86");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = tink_core__Future_Future_Impl_::map($combinedFuture, array(new _hx_lambda(array(&$cb1), "ufront_web_result_ViewResult_9"), 'execute'), null);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_3(&$_gthis, &$defaultData, $viewTemplate, $layoutTemplate, $partialTemplates) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::renderResult@506");
		$__hx__spos = $GLOBALS['%s']->length;
		try {
			$combinedData = ufront_view__TemplateData_TemplateData_Impl_::fromMany((new _hx_array(array($defaultData, ufront_web_result_ViewResult::$globalValues, $_gthis->data))));
			$combinedHelpers = ufront_web_result_ViewResult::getCombinedMap((new _hx_array(array(ufront_web_result_ViewResult::$globalHelpers, $_gthis->helpers))));
			$tmp8 = tink_core_OutcomeTools::sure($partialTemplates);
			ufront_web_result_ViewResult::addHelpersForPartials($tmp8, $combinedData, $combinedHelpers);
			$tmp9 = ufront_web_result_ViewResult::executeTemplate("view", $viewTemplate, $combinedData, $combinedHelpers);
			$viewOut = tink_core_OutcomeTools::sure($tmp9);
			$tmp10 = null;
			if($layoutTemplate->index === 0) {
				if(_hx_deref($layoutTemplate)->params[0] === null) {
					$tmp10 = true;
				} else {
					$tmp10 = false;
				}
			} else {
				$tmp10 = false;
			}
			if($tmp10) {
				$tmp = tink_core_Outcome::Success($viewOut);
				$GLOBALS['%s']->pop();
				return $tmp;
			} else {
				$tmp11 = ufront_view__TemplateData_TemplateData_Impl_::set($combinedData, "viewContent", $viewOut);
				$tmp12 = ufront_web_result_ViewResult::executeTemplate("layout", $layoutTemplate, $tmp11, $combinedHelpers);
				$layoutOut = tink_core_OutcomeTools::sure($tmp12);
				{
					$tmp = tink_core_Outcome::Success($layoutOut);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			}
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) && $__hx__e->getCode() == null ? $__hx__e->e : $__hx__e;
			if(($e = $_ex_) instanceof tink_core_TypedError){
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				{
					$tmp = tink_core_Outcome::Failure($e);
					$GLOBALS['%s']->pop();
					return $tmp;
				}
			} else throw $__hx__e;;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_4(&$allPartialTemplates, &$name, &$partialErrors, &$source, $outcome) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::loadPartialTemplates@645");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = $outcome->index;
		switch($tmp2) {
		case 0:{
			$tpl = _hx_deref($outcome)->params[0];
			if($tpl !== null) {
				$allPartialTemplates->set($name, $tpl);
			} else {
				$tmp3 = "Partial " . _hx_string_or_null($name) . " must be either TFromString or TFromEngine, was ";
				$tmp4 = Std::string($source);
				$v = ufront_web_HttpError::internalServerError(_hx_string_or_null($tmp3) . _hx_string_or_null($tmp4), null, _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 647, "className" => "ufront.web.result.ViewResult", "methodName" => "loadPartialTemplates")));
				$partialErrors->set($name, $v);
			}
		}break;
		case 1:{
			$partialErrors->set($name, _hx_deref($outcome)->params[0]);
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_5(&$allPartialTemplates, &$partialErrors, $_) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::loadPartialTemplates@652");
		$__hx__spos = $GLOBALS['%s']->length;
		$numberOfErrors = Lambda::count($partialErrors, null);
		switch($numberOfErrors) {
		case 0:{
			$tmp = tink_core_Outcome::Success($allPartialTemplates);
			$GLOBALS['%s']->pop();
			return $tmp;
		}break;
		case 1:{
			$_g = (new _hx_array(array()));
			{
				$tmp6 = $partialErrors->iterator();
				while(true) {
					$tmp7 = !$tmp6->hasNext();
					if($tmp7) {
						break;
					}
					$e = $tmp6->next();
					$_g->push($e);
					unset($tmp7,$e);
				}
			}
			$err = $_g[0];
			{
				$tmp = tink_core_Outcome::Failure($err);
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}break;
		default:{
			$_g1 = (new _hx_array(array()));
			{
				$tmp8 = $partialErrors->keys();
				while(true) {
					$tmp9 = !$tmp8->hasNext();
					if($tmp9) {
						break;
					}
					$name1 = $tmp8->next();
					$_g1->push($name1);
					unset($tmp9,$name1);
				}
			}
			$tmp10 = Std::string($_g1);
			$tmp11 = "Partials " . _hx_string_or_null($tmp10) . " failed to load: ";
			$tmp12 = $partialErrors->toString();
			{
				$tmp = ufront_web_result_ViewResult::error(_hx_string_or_null($tmp11) . _hx_string_or_null($tmp12), $partialErrors, _hx_anonymous(array("fileName" => "ViewResult.hx", "lineNumber" => 661, "className" => "ufront.web.result.ViewResult", "methodName" => "loadPartialTemplates")));
				$GLOBALS['%s']->pop();
				return $tmp;
			}
		}break;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_6(&$contextData, &$contextHelpers, &$name, &$partial, $partialData) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::addHelpersForPartials@673");
		$__hx__spos = $GLOBALS['%s']->length;
		$combinedPartialData = _hx_anonymous(array());
		ufront_view__TemplateData_TemplateData_Impl_::setObject($combinedPartialData, $contextData);
		ufront_view__TemplateData_TemplateData_Impl_::setObject($combinedPartialData, $partialData);
		ufront_view__TemplateData_TemplateData_Impl_::set($combinedPartialData, "__current__", $partialData);
		$tmp2 = "Partial[" . _hx_string_or_null($name) . "]";
		$tmp3 = tink_core_Outcome::Success($partial);
		$tmp4 = ufront_web_result_ViewResult::executeTemplate($tmp2, $tmp3, $combinedPartialData, $contextHelpers);
		{
			$tmp = tink_core_OutcomeTools::sure($tmp4);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_7() {
	{
		$obj = _hx_anonymous(array());
		$this1 = null;
		if($obj !== null) {
			$this1 = $obj;
		} else {
			$this1 = _hx_anonymous(array());
		}
		return ufront_view__TemplateData_TemplateData_Impl_::setObject($this1, _hx_anonymous(array()));
	}
}
function ufront_web_result_ViewResult_8(&$cb, $values) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::error@80");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp2 = $values[0];
		$tmp3 = $values[1];
		$tmp4 = $values[2];
		call_user_func_array($cb, array($tmp2, $tmp3, $tmp4));
		$GLOBALS['%s']->pop();
	}
}
function ufront_web_result_ViewResult_9(&$cb1, $values1) {
	{
		$GLOBALS['%s']->push("ufront.web.result.ViewResult::error@87");
		$__hx__spos = $GLOBALS['%s']->length;
		$tmp5 = $values1[0];
		$tmp6 = $values1[1];
		$tmp7 = $values1[2];
		{
			$tmp = call_user_func_array($cb1, array($tmp5, $tmp6, $tmp7));
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
}
