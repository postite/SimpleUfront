package control;
import haxe.Json;
import tink.CoreApi.Surprise;
import ufront.web.Controller;
import ufront.web.result.*;
using tink.CoreApi;


@viewFolder('home')
class HomeController extends Controller {

	
	//inject the api
	@inject public var testApi:AsyncTestApi;
	
	// @post public function init() {
		
	// 	ufTrace("MainController::init");
	// }
	@:route("/")
	public function index(){
		return new ViewResult({title:"simple"},"index");
		
	}
	// @:route("/pol/")
	// public function pol():ActionResult
	// {
	//     return new ViewResult({title:"home"},"index");
	// }
	// @:route("/asy/*")
	// public var asy:AsyController;

	@:route("/partial/*")
	public var partial: PartialController;
	
}