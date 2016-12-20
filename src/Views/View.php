<?php
	namespace Views;
//smarty usage

	use \Smarty;


	abstract class View {
			//zmienna do smarty
			protected $smarty;
			public function __construct()
			{
				$this->smarty = new Smarty();
				$this->set('subdir', '/'.\Website\Config::$subdir);
			}
		//załadowanie modelu
		public function getModel($name){
			$name = 'Models\\'.$name;
            if(class_exists($name))
                return new $name();
            return null;
		}

		//załadowanie i zrenderowanie szablonu
		public function render($name)
		{
			$path='templates'.DIRECTORY_SEPARATOR;
			$path.=$name.'.html.php';


			try
			{
				if(is_file($path))
				{
					$this->smarty->display($path);
				}
				else
				{
					throw new \Exception('Nie można załączyć szablonu '.$name.' z: '.$path);
				}
			}
			catch(\Exception $e)
			{
				echo " $e<br>"; // POZOSTAW TYLKO DO DEBUGOWANIA SMARTY!
				echo "Błąd 404: Nie odnaleziono strony!";
				exit;
			}
		}

		public function set($name, $value)
		{
			$this->smarty->assign($name, $value);
		}
	}


?>
