<?php
	namespace Controllers;
	//kontroler do obsługi kategorii
	//każda metoda odpowiada jednej akcji możliwej
    //do wykonania przez kontroler
	class Categories extends Controller {
		//wyświetla widok z listą kategorii
		public function index()
		{
			//tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
			//w widoku
			$view = $this->getView('Categories');
			if(!$view || !$view->index())
					$this->redirect('errors/404.html');
		}
		//wyświetla widok z konkretną kategorią
		public function showone($id=null)
		{
			if($id !== null)
			{
				//tworzy obiekt widoku i zleca wyświetlenie wybranej kategorii
				$view = $this->getView('Categories');
					if(!$view || !$view->showone($id))
						$this->redirect('errors/404.html');
			}
			else
				$this->redirect('Categories/');
		}
		//usuwa wybraną kategorię
		public function delete($id){
			if($id !== null)
			{
				//za operację na bazie danych odpowiedzialny jest model
				//tworzymy obiekt modelu i zlecamy usunięcie kategorii
				$model=$this->getModel('Categories');
                if($model)
								{
				    			$data = $model->delete($id);
                    //nie przekazano komunikatów o błędzie
                }
								else
								{
										//powiadamiamy odpowiedni widok, że nastąpiła aktualizacja bazy
										  $this->redirect('errors/404.html');
								}


			}
				$this->redirect('Categories/');
		}
		//wyświetla widok formularza umożliwiający dodanie do bazy kategorii
		public function add()
		{
			$view=$this->getView('Categories');
				if($view)
					$view->add();
				else
				  $this->redirect('errors/404.html');
		}

		//dodaje do bazy kategorię
		public function insert() {
			//za operację na bazie danych odpowiedzialny jest model
			//tworzymy obiekt modelu i zlecamy dodanie kategorii
			$model=$this->getModel('Categories');
            if($model)
						{
								//d($_POST['name']);
			     			$data = $model->insert($_POST['name']);
                 //nie przekazano komunikatów o błędzie
								$this->redirect('Categories/');
            }
						else
						{
							$this->redirect('errors/404.html');
						}

		}
	}
?>
