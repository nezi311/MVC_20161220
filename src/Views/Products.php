<?php
	namespace Views;
	
	class Products extends View {
		//wy�wietlenie widoku z produktami
		public function index($category = null){
			//pobranie z modelu listy produkt�w
			$model = $this->getModel('Products');
			$this->set('allProds', $model->getAll($category));
			$this->set('countProds', $model->getCountOrderedByCategory());
			
			$model = $this->getModel('Categories');
			if($category !== null)
				$this->set('allCats', $model->getOne($category));
			else
				$this->set('allCats', $model->getAll());
			
			//przetworzenie szablonu do wy�wietlania listy produkt�w
			$this->render('Products');
		}
		
		//wy�wietlenie widoku z wybranym produktem
		public function showone($id){
			//pobranie wybranej kategorii
			$model = $this->getModel('Products');
			$item = $model->getOne($id);
			$this->set('oneProd', $item);
			$this->render('oneProduct');
		}
		
		//wy�wietlenie widoku z formularzem do dodawania produktu
		public function add(){
			$model = $this->getModel('Categories');
			$this->set('allCats', $model->getAll());
			$this->render('addProduct');
		}		
		
	}



