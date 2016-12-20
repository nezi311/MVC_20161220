<?php
	namespace Controllers;
	//kontroler do obsługi produktów
	//każda metoda odpowiada jednej akcji możliwej 
	//do wykonania przez kontroler
	class Products extends Controller {
		//wyświetla widok z listą produktów	
		public function index(){
			$this->showcat();
		}
		//wyświetla widok z listą produktów (w wybranej kategorii)		
		public function showcat($category = null){
			//tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
			//w widoku
			$view = $this->getView('Products');
			$view->index($category);
		}		
		
		//wyświetla widok z konkretną kategorią
		public function showone($id=null){			
			if($id !== null)
			{
				$view = $this->getView('Products');
				$view->showone($id);
			}
			else
				$this->redirect('Products/');
		}	
		
		//usuwa wybrany produkt
		public function delete($id){
			if($id !== null)
			{
				//za operację na bazie danych odpowiedzialny jest model
				//tworzymy obiekt modelu i zlecamy usunięcie produktu
				$model=$this->getModel('Products');
				$model->delete($id);
			}
			$this->redirect('Products/');
		}
		
		
		//wyświetla widok formularza umożliwiający dodanie do bazy produkty
		public function add() {
			$view=$this->getView('Products');
			$view->add();
		}
		//dodaje do bazy produkt
		public function insert() {
			//za operację na bazie danych odpowiedzialny jest model
			//tworzymy obiekt modelu i zlecamy dodanie produktu
			$model=$this->getModel('Products');
			$model->insert($_POST['name'],$_POST['description'],$_POST['price'],$_POST['category']);
			$this->redirect('Products/');
		}		
	}
