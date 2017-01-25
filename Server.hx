import ufront.MVC;
import control.*;
class Server {

	static var ufApp:UfrontApplication;
	
	public static function main() {

		ufApp = new UfrontApplication({
			indexController: HomeController,
			templatingEngines: [TemplatingEngines.haxe],
			defaultLayout: "layout.html",
			remotingApi: Api,
			logFile: "logs/helloworld.log",
		});
		
		ufApp.executeRequest();
		
		//when using a database
		/*var cnx = Mysql.connect( Config.mysql );
		Transaction.main( cnx, function () {
			ufApp.executeRequest();
		});*/
	}
	
}