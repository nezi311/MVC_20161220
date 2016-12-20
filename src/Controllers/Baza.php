<?php
	namespace Controllers;
	//kontroler do obsługi kategorii
	//każda metoda odpowiada jednej akcji możliwej
    //do wykonania przez kontroler
	class Baza extends Controller {
		//wyświetla widok z listą kategorii
		public function index()
		{
			//tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
			//w widoku
			$view = $this->getView('Baza');
			if(!$view || !$view->install())
					$this->redirect('errors/404.html');
		}
	}
?>
