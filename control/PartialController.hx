package control;
import haxe.Json;
import tink.CoreApi.Surprise;
import ufront.web.Controller;
import ufront.web.result.*;
using tink.CoreApi;
import ufront.view.TemplatingEngines;


@viewFolder('partial')
class PartialController extends Controller {

	
	//inject the api
	@inject public var testApi:AsyncTestApi;
	@inject public var synctestApi:TestApi;
	
	@post public function init() {
		
		ViewResult.globalPartials.set("glob", ufront.web.result.ViewResult.TemplateSource.TFromEngine("partial/part.html"));
	    ViewResult.globalValues.set("menudata",renderMenu());	 		
	    ViewResult.globalValues.set("menuasyncdata",renderAsyncMenu());	 		
	    ViewResult.globalValues.set("menusyncdata",rendersyncMenu());	 		
	}

	// @:route("/")
	// public function index(){
	// 	return new ViewResult({title:"simple"},"index");
		
	// }
	// very simple partial;
	@:route("/")
	public function simple() {
		return new ViewResult({title:"simple partial"},"index").addPartial("bout","partial/part.html");
	
	}

	@:route("/string/")
	public function simpleStringPartial()
	{
	    return new ViewResult({title:"simple partial"},"addon")
					.addPartialString('addon','<div>hello partial string</div>',ufront.view.TemplatingEngines.erazor);
		 		
	}

	@:route("/parts/")
	public function simpleparts()
	{
		//ViewResult.globalPartials.set("menu", ufront.web.result.ViewResult.TemplateSource.TFromEngine("menu/menu"));

	    var res= new ViewResult({title:"partial"},"addon");
	    res.addPartials(["addon" => "partial/part.html"], TemplatingEngines.haxe);
		return res;		
			 		
			 		
	}
	@:route("/global/")
	public function glob()
	{
		ViewResult.globalPartials.set("addon", ufront.web.result.ViewResult.TemplateSource.TFromEngine("partial/part.html"));
	    return new ViewResult({title:"partial"},"addon");		 		
			 		
	}

	@:route("/globalinited/")
	public function globinit()
	{
		//ViewResult.globalPartials.set("addon", ufront.web.result.ViewResult.TemplateSource.TFromEngine("partial/part.html"));
	    return new ViewResult({title:"partial"},"global");		 		
			 		
	}

	@:route("/initedValues/")
	public function initedValues()
	{
	    return new ViewResult({title:"partial"},"globalValues");
	}

	@:route("/initedsyncValues/")
	public function initedsyncValues()
	{
	    return new ViewResult({title:"partial"},"globalsyncValues");
	}

	@:route("/initedasyncValues/")
	public function initedAsyncValues()
	{
	    return new ViewResult({title:"partial"},"globalAsyncValues");
	}


	public function renderMenu():String
	{
	   return "menu data"; 
	}

	public function renderAsyncMenu(){
		ufTrace( "do aync");
		var futureViewResult = testApi.gimmeJson().map(function(outcome) {
            switch outcome {
              case Success(jsonStr):
                  var json:Dynamic = Json.parse(jsonStr);
                  ufTrace( json);
                  return json;
              case Failure(err):
              	ufTrace( err);
                  return "paf";
            }
        });
		
        return futureViewResult;
	}


	//doesn't work
	public function rendersyncMenu(){
		ufTrace( "do sync");
		var data = synctestApi.gimmeJson();
        var menu= haxe.Json.parse(data);
		
        return menu;
	}

	
}