<?
class Router {
	private $routes;
	function __construct() {
		$this->routes = require(ROOT.'/page/routes.php');
	}
	function getURI(){
		if(!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	function run() {
		$uri = ($this->getURI());
		
		foreach ($this->routes as $pregURI => $path) {
			if(preg_match("~$pregURI~", $uri)) {
				$segments = explode('/', $path);
				$controllerName = ucfirst(array_shift($segments)).'Controller';
				$action = 'action'.ucfirst(array_shift($segments));
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				!file_exists($controllerFile)?:require($controllerFile);
				$var = new $controllerName;
				$result = $var->$action();
				if($result){break;}
			}
		}
	}
}
?>