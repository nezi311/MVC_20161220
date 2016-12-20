<?php
	namespace Models;
	use \PDO;
	class Ksiazka extends Model
  {
		//model zwraca tablicę wszystkich kategorii
		public function getAll()
		{
            $data = array();
            if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $ksiazki = array();
                    //$stmt = $this->pdo->query('SELECT * FROM `ksiazka`');
										$stmt = $this->pdo->query("SELECT ksiazka.id, tytul, autor.id AS autorId, rok_wydania, kategoria, CONCAT(autor.imie,' ',autor.nazwisko) AS autorNazwa FROM ksiazka INNER JOIN autor ON autor.id = ksiazka.autor");
                    $ksiazki = $stmt->fetchAll();
                    $stmt->closeCursor();
                    if($ksiazki && !empty($ksiazki))
                        $data['ksiazki'] = $ksiazki;
                    else
                        $data['ksiazki'] = array();
                }
                catch(\PDOException $e)
                {
                    $data['error'] = 'Błąd odczytu danych z bazy! ';
                }
            return $data;
		}
		//model zwraca wybraną kategorię
		public function getOne($id)
    {
            $data = array();
            if($id === NULL)
                $data['error'] = 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare("SELECT ksiazka.id,ksiazka.tytul,CONCAT(autor.imie,' ',autor.nazwisko) AS nazwaAutor, ksiazka.rok_wydania, kategoria.nazwa AS nazwaKategoria FROM ksiazka
INNER JOIN autor ON autor.id = ksiazka.autor
INNER JOIN kategoria ON kategoria.id = ksiazka.kategoria
WHERE ksiazka.id=:id");
                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                    $result = $stmt->execute();
                    $ksiazki = $stmt->fetchAll();
                    $stmt->closeCursor();
                    //czy istnieje kategoria o padanym id
                    if($result && $ksiazki && !empty($ksiazki)){
                        $data['ksiazki'] = $ksiazki[0];
                    }
                    else
                    {
                        //$data['category'] = array();
                        $data['error'] = "Brak ksiazki o id=$id!";
                    }

                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd odczytu danych z bazy!';
                }
            return $data;
		}
		//model usuwa wybraną kategorię
		public function delete($id)
    {
						$blad = false;
            $data = array();
            if($id === NULL)
						{
							$data['error'] = 'Nieokreślone id!';
							$blad=true;
						}

						if(!$blad)
						{
							if(!$this->pdo)
									$data['error'] = 'Połączenie z bazą nie powidoło się!';
							else
									try
									{
											$stmt = $this->pdo->prepare('DELETE FROM `ksiazka` WHERE `id`=:id');
											$stmt->bindValue(':id', $id, PDO::PARAM_INT);
											$result = $stmt->execute();
											$rows = $stmt->rowCount();
											$stmt->closeCursor();
											if(!$result && $rows <= 0)
											$data['error'] = "Nie znaleziono autora o id = $id!";
									}
									catch(\PDOException $e)
									{
											 $data['error'] = 'Błąd odczytu danych z bazy!';
									}
							return $data;
						}
						else
						{
							return $data;
						}
		}
		//model dodaje wybraną kategorię

		public function insert($tytul,$autor,$rok_wydania,$kategoria)
    {
						$blad = false;
            $data = array();

            if($tytul === NULL || $tytul === "")
						{
							$data['error'] = 'Nieokreślony tytul!';
							$blad=true;
						}
            if($autor === NULL || $autor === "")
						{
							$data['error'] =$data['error'].'<br> Nieokreślony autor!';
							$blad=true;
						}
						if($rok_wydania === NULL || $rok_wydania === "")
						{
							$data['error'] =$data['error'].'<br> Nieokreślony rok wydania!';
							$blad=true;
						}
						if($kategoria === NULL || $kategoria === "")
						{
							$data['error'] =$data['error'].'<br> Nieokreślona kategoria!';
							$blad=true;
						}

						if(!$blad)
						{
							if(!$this->pdo)
									$data['error'] = 'Połączenie z bazą nie powidoło się!';
							else
									try
									{
											$stmt = $this->pdo->prepare('INSERT INTO `ksiazka` (`tytul`,`autor`,`rok_wydania`,`kategoria`) VALUES (:tytul,:autor,:rok_wydania,:kategoria)');
											$stmt->bindValue(':tytul', $tytul, PDO::PARAM_STR);
											$stmt->bindValue(':autor', $autor, PDO::PARAM_INT);
											$stmt->bindValue(':rok_wydania', $rok_wydania, PDO::PARAM_INT);
											$stmt->bindValue(':kategoria', $kategoria, PDO::PARAM_INT);
											$stmt->execute();
											$stmt->closeCursor();
									}
									catch(\PDOException $e)
									{
											 $data['error'] =$data['error'].'<br> Błąd zapisu danych do bazy!';
									}
							return $data;
						}
						else
						{
							return $data;
						}

		}

		public function autorbooks($id_autor)
		{
					$blad = false;
					$data = array();
					if($id_autor === NULL)
					{
						$data['error'] = 'Nieokreślone id!';
						$blad=true;
					}

					if(!$blad)
					{
						if(!$this->pdo)
								$data['error'] = 'Połączenie z bazą nie powidoło się!';
						else
								try
								{
										$stmt = $this->pdo->prepare('SELECT * FROM ksiazka WHERE ksiazka.autor=:id;');
										$stmt->bindValue(':id', $id_autor, PDO::PARAM_INT);
										$result = $stmt->execute();
										$ksiazki = $stmt->fetchAll();
										$rows = $stmt->rowCount();
										$stmt->closeCursor();



										if($rows > 0 && $ksiazki && !empty($ksiazki))
										{
											$data['ksiazki'] = $ksiazki;
										}
										else
										{
											$data['error'] = "Nie znaleziono ksiązek autora o id = $id_autor!";
										}

								}
								catch(\PDOException $e)
								{
										 $data['error'] = 'Błąd odczytu danych z bazy!';
								}
						return $data;
					}
					else
					{
						return $data;
					}
		}

		public function year($rok)
		{
			$blad = false;
			$data = array();
			if($rok === NULL)
			{
				$data['error'] = 'Nieokreślony rok';
				$blad=true;
			}

			if(!$blad)
			{
				if(!$this->pdo)
						$data['error'] = 'Połączenie z bazą nie powidoło się!';
				else
						try
						{
								$stmt = $this->pdo->prepare('SELECT * FROM ksiazka WHERE rok_wydania=:rok;');
								$stmt->bindValue(':rok', $rok, PDO::PARAM_INT);
								$result = $stmt->execute();
								$ksiazki = $stmt->fetchAll();
								$rows = $stmt->rowCount();
								$stmt->closeCursor();



								if($rows > 0 && $ksiazki && !empty($ksiazki))
								{
									$data['yearKsiazki'] = $ksiazki;
								}
								else
								{
									$data['error'] = "Nie znaleziono ksiązek z roku $rok!";
								}

						}
						catch(\PDOException $e)
						{
								 $data['error'] = 'Błąd odczytu danych z bazy!';
						}
				return $data;
			}
			else
			{
				return $data;
			}
		}


	}
?>
