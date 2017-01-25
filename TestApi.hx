import ufront.api.UFApi;
class TestApi extends UFApi {

	
	public function gimmeSomething():String {
		
		return "You've got something:";
	}
	public function gimmeJson():String {
		var jsonFile:String = Sys.getCwd() + "data/jsonData.json";
		var jsonStr = sys.io.File.getContent(jsonFile);
	
		return jsonStr;
	}
	public function saveJsonData(_jsonStr:String):Bool {
		var jsonFile:String = Sys.getCwd() + "data/jsonData.json";
		sys.io.File.saveContent(jsonFile, _jsonStr);
		return true;
	}

	
		
}