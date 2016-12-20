<?php
	namespace Views;

	class Autor extends View
	{
		//wyświetlenie widoku z kategoriami
		public function index()
		{
			//pobranie z modelu listy kategorii
			$model = $this->getModel('Autor');
            if($model)
						{
                $data = $model->getAll();
                if(isset($data['autorzy']))
                     $this->set('zmiennaAutorzy', $data['autorzy']);
            }
            if(isset($data['error']))
                $this->set('error', $data['error']);
            //przetworzenie szablonu do wyświetlania listy kategorii
            $this->render('indexAutorzy');

		}




	
		public function showone($id)
		{
			//pobranie wybranej kategorii
			$model = $this->getModel('Autor');
            if($model)
						{
					    $data = $model->getOne($id);
              if(isset($data['autorzy']))
              	$this->set('oneAutor', $data['autorzy']);
            }
            if(isset($data['error']))
                $this->set('error', $data['error']);


		 $model = $this->getModel('Ksiazka');
			 if($model)
			 {
				 	$data = $model->autorbooks($id);
						if(isset($data['ksiazki']))
							$this->set('ksiazki', $data['ksiazki']);
			}
			if(isset($data['error']))
				$this->set('error', $data['error']);


						  $this->render('oneAutor');

		}
		//wyświetlenie widoku z formularzem do dodawania kategorii
		public function add(){
			$this->render('addAutor');
		}

	}



?>
