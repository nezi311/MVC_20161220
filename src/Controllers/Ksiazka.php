<?php
	namespace Controllers;
	//kontroler do obsługi Ksiazki
	//każda metoda odpowiada jednej akcji możliwej
    //do wykonania przez kontroler
	class Ksiazka extends Controller
	{
		//wyświetla widok z listą kategorii
		public function index(){
			//tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
			//w widoku
			$view = $this->getView('Ksiazka');
			$view->index();
		}
		//wyświetla widok z konkretną kategorią
		public function showone($id=null)
		{
			if($id !== null)
			{
				//tworzy obiekt widoku i zleca wyświetlenie wybranej kategorii
				$view = $this->getView('Ksiazka');
				$view->showone($id);
			}
			else
				$this->redirect('Ksiazka/');
		}
		//usuwa wybraną kategorię
		public function delete($id)
		{
			if($id !== null)
			{
				//za operację na bazie danych odpowiedzialny jest model
				//tworzymy obiekt modelu i zlecamy usunięcie kategorii
				$model=$this->getModel('Ksiazka');
                if($model) {
				    $data = $model->delete($id);
                    //nie przekazano komunikatów o błędzie
                }
				//powiadamiamy odpowiedni widok, że nastąpiła aktualizacja bazy
				$this->redirect('Ksiazka/');
			}
			else
				$this->redirect('Ksiazka/');
		}
		//wyświetla widok formularza umożliwiający dodanie do bazy kategorii
		public function add()
		{
			$view=$this->getView('Ksiazka');
			$view->add();
		}


		//dodaje do bazy książkę
		public function insert()
		{
			//za operację na bazie danych odpowiedzialny jest model
			//tworzymy obiekt modelu i zlecamy dodanie książki
			$model=$this->getModel('Ksiazka');
            if($model) {
			     $data = $model->insert($_POST['tytul'],$_POST['autorzy'],$_POST['rok_wydania'],$_POST['kategorie'] );
                 //nie przekazano komunikatów o błędzie
            }
            $this->redirect('Ksiazka/');
		}

		public function autorbooks($id_autor)
		{
			if($id_autor !== null)
			{
				//tworzy obiekt widoku i zleca wyświetlenie wybranej ksiazki
				$view = $this->getView('Ksiazka');
				$view->autorbooks($id_autor);
			}
			else
				$this->redirect('Ksiazka/');
		}

		public function year()
		{
				//tworzy obiekt widoku i zleca wyświetlenie wybranej ksiazki
				$view = $this->getView('Ksiazka');
				$view->year($_POST["rok"]);

		}


	}
?>
