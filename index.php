<?php
	//automatyczne ładowanie potrzebnych klas
	require_once('vendor/autoload.php');
	//use Config\Database\DBConfig as DB;
	\DB\dbconfig::setDBConfig();
	//przykład uwzględnia obsługę jednego kontrolera,
	//który wykonuje określone akcje $action
	//i może otrzymywać parametry poprzez zmienną $id

	// skrócie, wartości z action są przekazywane do controllera za pomocą tablicy get
	// w controllerze są wywoływane odpowiednie widoki (Views)
	// za to w views dane są wyciągane za pomocą modeli (models) i następnie przekazywane do szablonu (tamplates)
	\Website\Config::$subdir = 'Lab73/';
	if(isset($_GET['controller']))
		$controller = $_GET['controller'];
	else
		$controller = 'Categories';



	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = 'index';
	if(isset($_GET['id']))
		$id = $_GET['id'];
	else
		$id = null;

	$controller='Controllers\\'.$controller;
	//tworzymy kontroler
	$mycontroller = new $controller;
	//wykonujemy akcję dla kontrolera
	$mycontroller->$action($id);

?>
