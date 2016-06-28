<?php 

class Route {
	static $root;

	static $routes;

	static $controllers;

	public static function init()
	{
		Route::$root = 'inc/class.route.php/';
		Route::$controllers = '/controllers/';
	}

	public static function parse()
	{
		#remove the directory path we don't want
  		$request = str_replace(self::$root, "", $_SERVER['REQUEST_URI']);
 
		#split the path by '/'
		$params = explode("/", $request);

		// remove empty index
		$params = array_filter($params, function($value){
			return !empty($value) || $value === 0;
		});
		var_dump($params);
		if(isset(self::$routes[$params[0]])) {
			$route = self::$routes[$params[0]];
			
			if($_SERVER['REQUEST_METHOD'] == strtoupper($route['method'])) {
				$path = dirname(dirname(__FILE__)) . self::$controllers . $route['controllers'] . '.php';
				if(file_exists($path)) {
					require_once $path;
				} else {
					Response::error('Route is missing'); // do better handling here
				}
			} else {
				Response::error('Invalid request method');
			}
		} else {
			Response::error('Invalid request');
		}
	}

	// todo: setter & getter route from static method, instead of static variable
}

Route::init();

?>