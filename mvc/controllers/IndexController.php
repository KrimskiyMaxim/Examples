<?

class IndexController {
	
	function __construct() {
		
	}
	
	function actionIndex(){
		echo('Controller: IndexController<br>');
		echo('action: actionIndex<br>');
		return(true);
	}
	function actionView(){
		echo('Controller: IndexController<br>');
		echo('action: actionView<br>');
		return(true);
	}
	
}

?>