<?
class Router{
	private $routes;

	function __construct() {
		$this->routes = require(ROOT.'/components/routes.php');
	}
	
	function start() {
	    $uri = parse_url($_SERVER['REQUEST_URI']);
		$URI = trim($uri['path'], '/');
        $URI = $this->createRoot($URI);

		foreach($this->routes as $uri => $preg) {
			if ($URI == $uri) {
				$str = preg_split('~/~', $preg);
				$controllerName = ucfirst(array_shift($str).'Controller');
				$actionName = 'action'.ucfirst(array_shift($str));
				
				require(ROOT.'/controllers/'.$controllerName.'.php');
				$begin = new $controllerName;
				$begin->$actionName();
			}
		}
	}
	function deleteRoot($URI){

        $var = str_replace('\\', '/', ROOT);
        $var = explode('/', $var);
        $arr = explode('/', str_replace($var, '', $URI));
        foreach ($arr as $key => &$val){
            if ($val == ''){
                unset($arr[$key]);
            }
        }
        $arr = implode('/', $arr);
        return $arr;
    }
    function createRoot($URI) {
        $site_root = trim(str_replace("index.php", "", $_SERVER["PHP_SELF"]), "/");
        return trim(str_replace($site_root, '', $URI), "/");
    }

}
?>