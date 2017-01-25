package control;
import haxe.Json;
import tink.CoreApi.Surprise;
import ufront.web.Controller;
import ufront.web.result.*;
using tink.CoreApi;


@viewFolder('async')
class AsyController extends Controller {

	
	//inject the api
	@inject public var testApi:AsyncTestApi;
	
	
	@:route("/")
	public function index(){
		return new ViewResult({title:"simple"},"index");
		
	}
	
	@:route("/zip/")
	public function zip() {
		
		//example of the api getting file content from the server (a json string in this case)
		var futureViewResult = testApi.gimmeJson().map(function(outcome) {
            switch outcome {
              case Success(jsonStr):
                  var json:Dynamic = Json.parse(jsonStr);
                  return new ViewResult({data:json},"zip");
              case Failure(err):
                  return new ViewResult( { message: err });
            }
        });
		
        return futureViewResult;
	}

	// borrowed from https://gist.github.com/cambiata/c40e097f1e4d98c130e2
	@:route('/cambia') public function async() return simulatedAsyncProcess();
	
	function simulatedAsyncProcess(): Surprise<ContentResult, Error> {
		var f = Future.trigger();		
		
		// simulated async processing...
		#if (neko) Sys.sleep(1); #end 
		if (Random.bool()) 
			f.trigger(Success(new ContentResult('This is the result from a simulated async success! :-)')));	
		else 
			f.trigger(Failure(new Error('This is a simulated async error - happens every second time...')));


		return f.asFuture();
	}

	
}