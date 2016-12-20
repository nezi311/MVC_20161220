<?php
	namespace Views;

	class Baza extends View
	{
		//wyświetlenie widoku z kategoriami
		public function install()
		{
			//pobranie z modelu listy kategorii
			$model = $this->getModel('Baza');
			if($model)
			{
				$flaga = $model->install();
				if(isset($flaga))
				{
					if($flaga)
					{
						$this->set("wiadomosc","Instalacja bazy przebiegła pomyślnie.");
					}
					else
					{
						$this->set("wiadomosc","Nie udało się zainstalować bazy.");
					}
				}
				$this->render('install');
				return true;
			}
			return false;
		}

	}



?>
