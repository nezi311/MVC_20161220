<?php
	namespace Views;

	class Categories extends View
	{
		//wyświetlenie widoku z kategoriami
		public function index()
		{
			//pobranie z modelu listy kategorii
			$model = $this->getModel('Categories');
            if($model)
						{
                $data = $model->getAll();
                if(isset($data['kategorie']))
                     $this->set('zmiennaKategorie', $data['kategorie']);
								if(isset($data['error']))
										$this->set('error', $data['error']);
								$this->render('indexCategory');
										return true;
            }
						return false;
		}




		//wyświetlenie widoku z wybraną kategorią
		public function showone($id)
		{
			//pobranie wybranej kategorii
			$model = $this->getModel('Categories');
            if($model)
						{
			    			$data = $model->getOne($id);
                if(isset($data['kategorie']))
                    $this->set('oneCat', $data['kategorie']);
								if(isset($data['ksiazki']))
									 	$this->set('ksiazki',$data['ksiazki']);
								if(isset($data['error']))
										$this->set('error', $data['error']);
								$this->render('oneCategory');
								return true;
            }
						return false;
		}
		//wyświetlenie widoku z formularzem do dodawania kategorii
		public function add(){
			$this->render('addCategory');
		}


	}



?>
