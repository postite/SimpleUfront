import ufront.MVC;
import control.*;
class Client {

	static var clientApp:ClientJsApplication;
	
	static function main() {
		
		clientApp = new ClientJsApplication({
			indexController: HomeController,
			templatingEngines: [TemplatingEngines.haxe],
			defaultLayout: "layout.html",
			authImplementation:YesBossAuthHandler,
		});
	
		clientApp.listen();
	}
	
}