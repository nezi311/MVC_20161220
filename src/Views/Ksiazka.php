<?php
	namespace Views;

	class Ksiazka extends View
	{
		//wyświetlenie widoku z kategoriami
		public function index()
		{
			//pobranie z modelu listy kategorii
			$model = $this->getModel('Ksiazka');
            if($model)
						{
                $data = $model->getAll();
								//d($data);
                if(isset($data['ksiazki']))
                     $this->set('zmiennaKsiazka', $data['ksiazki']);
            }
						if(isset($data['error']))
                $this->set('error', $data['error']);


						$model = $this->getModel('Categories');
						if($model)
						{

								$data = $model->getAll();
								if(isset($data['kategorie']))
									$this->set('zmiennaKategorie',$data['kategorie']);
						}
            if(isset($data['error']))
                $this->set('error', $data['error']);
            //przetworzenie szablonu do wyświetlania listy kategorii
            $this->render('indexKsiazka');

		}




		//wyświetlenie widoku z wybraną kategorią
		public function showone($id)
		{
			//pobranie wybranej kategorii
			$model = $this->getModel('Ksiazka');
            if($model) {
			    $data = $model->getOne($id);
                if(isset($data['ksiazki']))
                    $this->set('oneKsiazka', $data['ksiazki']);
            }
            if(isset($data['error']))
                $this->set('error', $data['error']);
            $this->render('oneKsiazka');

		}
		//wyświetlenie widoku z formularzem do dodawania kategorii
		public function add()
		{
			$model = $this->getModel('Autor');
				if($model)
				{
					$data = $model->getAll();
					//d($data);
					if(isset($data['autorzy']))
						$this->set('setAutorzy',$data['autorzy']);
				}

				$model = $this->getModel('Categories');
					if($model)
					{
						$data = $model->getAll();
						if(isset($data['kategorie']))
							$this->set('setKategorie',$data['kategorie']);
					}

					$this->render('addKsiazka');
		}

		public function year($rok)
		{
			//pobranie wybranej kategorii
			$model = $this->getModel('Ksiazka');
						if($model) {
					$data = $model->year($rok);
								if(isset($data['yearKsiazki']))
										$this->set('yearKsiazki', $data['yearKsiazki']);
						}
						if(isset($data['error']))
								$this->set('error', $data['error']);
						$this->render('yearKsiazka'); // napisz szablon yearKsiazka

		}

	}
?>
