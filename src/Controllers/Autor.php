<?php
	namespace Controllers;
	//kontroler do obsługi autora
	//każda metoda odpowiada jednej akcji możliwej
    //do wykonania przez kontroler
	class Autor extends Controller {
		//wyświetla widok z listą kategorii
		public function index(){
			//tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
			//w widoku
			$view = $this->getView('Autor');
			$view->index();
		}
		//wyświetla widok z konkretną kategorią
		public function showone($id=null){
			if($id !== null)
			{
				//tworzy obiekt widoku i zleca wyświetlenie wybranej kategorii
				$view = $this->getView('Autor');
				$view->showone($id);
			}
			else
				$this->redirect('Autor/');
		}
		//usuwa wybraną kategorię
		public function delete($id){
			if($id !== null)
			{
				//za operację na bazie danych odpowiedzialny jest model
				//tworzymy obiekt modelu i zlecamy usunięcie kategorii
				$model=$this->getModel('Autor');
                if($model) {
				    $data = $model->delete($id);
                    //nie przekazano komunikatów o błędzie
                }
				//powiadamiamy odpowiedni widok, że nastąpiła aktualizacja bazy
				$this->redirect('Autor/');
			}
			else
				$this->redirect('Autor/');
		}
		//wyświetla widok formularza umożliwiający dodanie do bazy kategorii
		public function add() {
			$view=$this->getView('Autor');
			$view->add();
		}


		//dodaje do bazy kategorię
		public function insert() {
			//za operację na bazie danych odpowiedzialny jest model
			//tworzymy obiekt modelu i zlecamy dodanie kategorii
			$model=$this->getModel('Autor');
            if($model) {
			     $data = $model->insert($_POST['imie'],$_POST['nazwisko']);
                 //nie przekazano komunikatów o błędzie
            }
            $this->redirect('Autor/');
		}
	}
?>
