<?php
	namespace Models;
	use \PDO;
	class Categories extends Model {
		//model zwraca tablicę wszystkich kategorii
		public function getAll(){
            $data = array();
            if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $kategorie = array();
                    //$stmt = $this->pdo->query('SELECT * FROM `kategoria` ORDER BY nazwa ASC');
										$stmt = $this->pdo->query("SELECT kategoria.id, kategoria.nazwa, COUNT(ksiazka.kategoria) AS ilosc
																							FROM kategoria
																							LEFT OUTER JOIN ksiazka
																							ON ksiazka.kategoria=kategoria.id
																							GROUP BY kategoria.nazwa
																							ORDER BY `ilosc`  ASC");
                    $kategorie = $stmt->fetchAll();
                    $stmt->closeCursor();
                    if($kategorie && !empty($kategorie))
                        $data['kategorie'] = $kategorie;
                    else
                        $data['kategorie'] = array();
                }
                catch(\PDOException $e)
                {
                    $data['error'] = 'Błąd odczytu danych z bazy! ';
                }
            return $data;
		}
		//model zwraca wybraną kategorię
		public function getOne($id){
            $data = array();
            if($id === NULL)
                $data['error'] = 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare('SELECT * FROM `kategoria` WHERE `id`=:id');
                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                    $result = $stmt->execute();
                    $kategorie = $stmt->fetchAll();
                    $stmt->closeCursor();

										$stmt = $this->pdo->prepare('SELECT * FROM `ksiazka` WHERE `kategoria`=:id');
										$stmt->bindValue(':id', $id, PDO::PARAM_INT);
										$result = $stmt->execute();
										$ksiazki = $stmt->fetchAll();
										$stmt->closeCursor();
                    //czy istnieje kategoria o padanym id
                    if($result && $kategorie && !empty($kategorie)){
                        $data['kategorie'] = $kategorie[0];
												$data['ksiazki'] = $ksiazki;
                    }
                    else
                    {
                        //$data['category'] = array();
                        $data['error'] = "Brak kategorii o id=$id!";
                    }


                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd odczytu danych z bazy!';
                }
            return $data;
		}
		//model usuwa wybraną kategorię
		public function delete($id){
            $data = array();
            if($id === NULL)
                $data['error'] = 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare('DELETE FROM `kategoria` WHERE `id`=:id');
                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                    $result = $stmt->execute();
                    $rows = $stmt->rowCount();
                    $stmt->closeCursor();
                    if(!$result && $rows <= 0)
                    $data['error'] = "Nie znaleziono kategorii o id = $id!";
                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd odczytu danych z bazy!';
                }
            return $data;
		}
		//model dodaje wybraną kategorię

		public function insert($nazwa) {
            $data = array();
            if($nazwa === NULL || $nazwa === "")
                $data['error'] = 'Nieokreślna nazwa!';
						else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
									//---------------------------------------------------dokończ
                    $stmt = $this->pdo->prepare('INSERT INTO `kategoria` (`nazwa`) VALUES (:nazwa)');
                    $stmt->bindValue(':nazwa', $nazwa, PDO::PARAM_STR);
                    $stmt->execute();
                    $stmt->closeCursor();
                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd zapisu danych do bazy!';
                }
            return $data;
		}
	}
?>
