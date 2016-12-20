<?php
	namespace Models;
	use \PDO;
	class Baza extends Model {
		//model zwraca tablicę wszystkich kategorii

		public function install()
		{
			try
		  {
				 $stmt = $this->pdo->query("DROP TABLE IF EXISTS `ksiazka`");
				 $stmt = $this->pdo->query("DROP TABLE IF EXISTS `kategoria`");
				 $stmt = $this->pdo->query("DROP TABLE IF EXISTS `autor`");
				 $stmt->execute();
				 $stmt = $this->pdo->query("CREATE TABLE IF NOT EXISTS `autor`
																		(`id` INT NOT NULL AUTO_INCREMENT,
																		 `imie` VARCHAR(150) NOT NULL,
																		 `nazwisko` VARCHAR(150) NOT NULL,
																	 	 PRIMARY KEY (`id`))");
				 $stmt->execute();
				 $stmt = $this->pdo->query("CREATE TABLE IF NOT EXISTS `kategoria`
																	 (`id` INT NOT NULL AUTO_INCREMENT,
																		`nazwa` VARCHAR(150) NOT NULL,
																			PRIMARY KEY (`id`))");
			   $stmt->execute();
		     $stmt = $this->pdo->query("CREATE TABLE IF NOT EXISTS `ksiazka`
					 												( `id` INT NOT NULL AUTO_INCREMENT ,
																		`tytul` VARCHAR(200) NOT NULL ,
																		`autor` INT NOT NULL,
																		`rok_wydania` INT NOT NULL,
																		`kategoria` INT NOT NULL ,
																		PRIMARY KEY (`id`),
																		FOREIGN KEY (autor) REFERENCES autor(id) ON DELETE CASCADE,
																		FOREIGN KEY (kategoria) REFERENCES kategoria(id) ON DELETE CASCADE)");
					$stmt->execute();
					$autorzy_tablica = array();
					$autorzy_tablica[] = array('imie' => 'Dawid', 'nazwisko' => 'Dominiak');
					$autorzy_tablica[] = array('imie' => 'Andrzej', 'nazwisko' => 'Sapkowski');
					$autorzy_tablica[] = array('imie' => 'Daniel', 'nazwisko' => 'Maślak');
					$autorzy_tablica[] = array('imie' => 'Bartłomiej', 'nazwisko' => 'Zawisza');
					$autorzy_tablica[] = array('imie' => 'Marcin', 'nazwisko' => 'Pieseł');

					foreach($autorzy_tablica as $element)
					{
						$stmt = $this->pdo->prepare('INSERT INTO `autor`(`imie`,`nazwisko`) VALUES (:imie,:nazwisko)');

						$stmt -> bindValue(':imie',$element['imie'],PDO::PARAM_STR);
						$stmt -> bindValue(':nazwisko',$element['nazwisko'],PDO::PARAM_STR);

						$wynik_zapytania = $stmt -> execute(); // wykonanie zapytania

												if($wynik_zapytania != false)
												{

												}
												else
												{
														return false;
												}
					}

					$kategorie_tablica = array();
					$kategorie_tablica[] = array('nazwa' => 'Fantasy');
					$kategorie_tablica[] = array('nazwa' => 'Romans');
					$kategorie_tablica[] = array('nazwa' => 'Fantastyka Naukowa');
					$kategorie_tablica[] = array('nazwa' => 'Poradnik');
					$kategorie_tablica[] = array('nazwa' => 'Biografia');
					$kategorie_tablica[] = array('nazwa' => 'Akcja');
					foreach($kategorie_tablica as $element)
					{
						$stmt = $this->pdo->prepare('INSERT INTO `kategoria`(`nazwa`) VALUES (:nazwa)');

						$stmt -> bindValue(':nazwa',$element['nazwa'],PDO::PARAM_STR);

						$wynik_zapytania = $stmt -> execute(); // wykonanie zapytania

												if($wynik_zapytania != false)
												{

												}
												else
												{
														return false;
												}
					}

		      // tworzenie tablic asocjacyjnych w tablicy asocjacyjnej
		      $ksiazki_tablica = array();
		      $ksiazki_tablica[] = array('tytul'=>'Wiedzmin','autor'=>2,'rok_wydania'=>'1980','kategoria'=>1);
		      $ksiazki_tablica[] = array('tytul'=>'Wiedzmin 2','autor'=>2,'rok_wydania'=>'1990','kategoria'=>1);
		      $ksiazki_tablica[] = array('tytul'=>'Wiedzmin 3','autor'=>2,'rok_wydania'=>'2000','kategoria'=>1);
		      $ksiazki_tablica[] = array('tytul'=>'Gotuj z Andrzejem','autor'=>3,'rok_wydania'=>'2005','kategoria'=>4);
		      $ksiazki_tablica[] = array('tytul'=>'Jak z igły robić widły','autor'=>4,'rok_wydania'=>'2016','kategoria'=>4);
		      $ksiazki_tablica[] = array('tytul'=>'Jak dotarłem do domu po zlocie fantastyki','autor'=>1,'rok_wydania'=>'2016','kategoria'=>5);

		      foreach($ksiazki_tablica as $element)
		      {
		        $stmt = $this->pdo->prepare('INSERT INTO `ksiazka`(`tytul`,`autor`,`rok_wydania`,`kategoria`) VALUES (:tytul,:autor,:rok_wydania,:kategoria)');

		        $stmt -> bindValue(':tytul',$element['tytul'],PDO::PARAM_STR);
		        $stmt -> bindValue(':autor',$element['autor'],PDO::PARAM_INT);
		        $stmt -> bindValue(':rok_wydania',$element['rok_wydania'],PDO::PARAM_INT);
		        $stmt -> bindValue(':kategoria',$element['kategoria'],PDO::PARAM_INT);
		        $wynik_zapytania = $stmt -> execute(); // wykonanie zapytania

		                    if($wynik_zapytania)
		                    {
		                      //print("<br>Udało się dodać książkę ".$element['tytul']." ".$element['autor']." ".$element['rok_wydania']." ".$element['kategoria']);
		                    }
		      }
					return true;
		  }
		  catch (PDOException $e)
		  {
		      echo ('Wystąpił błąd biblioteki PDO: ' .$e->getMessage());
					return false;
		  }
		}
	}
?>
